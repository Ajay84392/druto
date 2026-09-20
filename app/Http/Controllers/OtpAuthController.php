<?php

namespace App\Http\Controllers;

use App\Mail\LoginOtpMail;
use App\Models\Business;
use App\Models\Customer;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

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
            'phone' => 'required_if:role,customer,merchant|string|min:7',
            'name' => 'nullable|string',
        ]);

        $email = $request->email;
        $role = $request->role;
        $name = $request->input('name', 'Demo User');
        $phone = $request->input('country_code', '').$request->input('phone', '');

        // Store details in session for verifyOtp
        session(['otp_pending_phone' => $phone]);

        // Find or create user
        $user = User::firstOrCreate(
            ['email' => $email],
            [
                'name' => $name,
                'password' => Hash::make('password'),
                'role' => $role,
            ]
        );

        // If they provided a name during login/register, let's update it in case they want to change it or firstOrCreate found them
        if ($request->filled('name') && $user->name !== $name) {
            $user->name = $name;
        }

        // Generate 4-digit OTP
        $otp = rand(1000, 9999);

        // Update User
        $user->otp = $otp;
        $user->otp_expires_at = Carbon::now()->addMinutes(10);
        $user->save();

        // Send Email
        try {
            Mail::to($user->email)->send(new LoginOtpMail($otp));
        } catch (\Exception $e) {
            Log::error('Mail sending failed: '.$e->getMessage());
            session()->flash('mail_error', 'Warning: Email could not be sent. Please check your SMTP settings.');
        }

        // For local testing, flash the OTP
        session()->flash('demo_otp', $otp);

        // Store role and email in session
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

        if (! $email || ! $role) {
            return redirect('/')->withErrors(['error' => 'Session expired. Please login again.']);
        }

        $user = User::where('email', $email)->first();

        if (! $user || $user->otp !== $request->otp || Carbon::now()->greaterThan($user->otp_expires_at)) {
            return back()->withErrors(['otp' => 'Invalid or expired OTP.']);
        }

        // OTP is valid - Clear it
        $user->otp = null;
        $user->otp_expires_at = null;
        $user->save();

        if ($role == 'merchant') {
            Business::firstOrCreate(
                ['email' => $user->email],
                [
                    'user_id' => $user->id,
                    'name' => $user->name,
                    'phone' => session('otp_pending_phone') ?: '00000'.rand(10000, 99999),
                ]
            );
        } elseif ($role == 'customer') {
            Customer::firstOrCreate(
                ['email' => $user->email],
                [
                    'name' => $user->name,
                    'phone' => session('otp_pending_phone') ?: '00000'.rand(10000, 99999),
                ]
            );
        }

        Auth::login($user);

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
