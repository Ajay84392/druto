<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Mail\LoginOtpMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class OtpAuthController extends Controller
{
    /**
     * Generate OTP and send via email.
     */
    public function sendOtp(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'role' => 'required|in:admin,merchant,customer',
        ]);

        $email = $request->email;
        $role = $request->role;

        // Find or create user for prototype (in production, you'd only find and error if not found)
        $user = User::firstOrCreate(
            ['email' => $email],
            [
                'name' => 'Demo User',
                'password' => Hash::make('password'),
                'role' => $role
            ]
        );

        // Generate 4-digit OTP
        $otp = rand(1000, 9999);
        
        // Update User
        $user->otp = $otp;
        $user->otp_expires_at = Carbon::now()->addMinutes(10);
        $user->save();

        // Send Email (will be logged to storage/logs/laravel.log based on .env config, or sent via SMTP)
        try {
            \Illuminate\Support\Facades\Mail::to($user->email)->send(new \App\Mail\LoginOtpMail($otp));
        } catch (\Exception $e) {
            \Illuminate\Support\Facades\Log::error('Mail sending failed: ' . $e->getMessage());
            // If mail fails, we still continue but the user won't get the email.
            // They can check logs for the OTP or we can flash an error message.
            session()->flash('mail_error', 'Warning: Email could not be sent. Please check your SMTP settings.');
        }

        // For local testing, flash the OTP to the session so the user can see it on screen
        session()->flash('demo_otp', $otp);

        // Store role and email in session to know who is verifying
        session(['otp_pending_email' => $user->email, 'otp_pending_role' => $role]);

        // Redirect to respective verify pages
        if ($role == 'admin') {
            return redirect('/admin/verify-otp');
        } elseif ($role == 'merchant') {
            return redirect('/merchant/verify-otp');
        } else {
            return redirect('/verify-otp');
        }
    }

    /**
     * Verify the submitted OTP.
     */
    public function verifyOtp(Request $request)
    {
        $request->validate([
            'otp' => 'required|numeric',
        ]);

        $email = session('otp_pending_email');
        $role = session('otp_pending_role');

        if (!$email || !$role) {
            return redirect('/')->withErrors(['error' => 'Session expired. Please login again.']);
        }

        $user = User::where('email', $email)->first();

        if (!$user || $user->otp !== $request->otp || Carbon::now()->greaterThan($user->otp_expires_at)) {
            return back()->withErrors(['otp' => 'Invalid or expired OTP.']);
        }

        // OTP is valid - Clear it
        $user->otp = null;
        $user->otp_expires_at = null;
        $user->save();

        // Login by setting the session prototype variables
        if ($role == 'admin') {
            session(['admin_logged_in' => true]);
            $redirect = '/admin/dashboard';
        } elseif ($role == 'merchant') {
            session(['merchant_logged_in' => true]);
            $redirect = '/merchant';
        } else {
            session(['customer_logged_in' => true]);
            $redirect = '/customer';
        }

        // Clear pending OTP session
        session()->forget(['otp_pending_email', 'otp_pending_role']);

        return redirect($redirect);
    }
}
