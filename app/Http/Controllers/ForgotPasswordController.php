<?php

namespace App\Http\Controllers;

use App\Mail\LoginOtpMail;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class ForgotPasswordController extends Controller
{
    public function showForgotForm()
    {
        return view('auth.forgot-password');
    }

    public function sendOtp(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
        ]);

        $user = User::where('email', $request->email)->first();

        if (! $user) {
            return back()->withErrors(['email' => 'We could not find a user with that email address.']);
        }

        $otp = rand(1000, 9999);

        $user->otp = $otp;
        $user->otp_expires_at = Carbon::now()->addMinutes(10);
        $user->save();

        try {
            Mail::to($user->email)->send(new LoginOtpMail($otp));
        } catch (\Exception $e) {
            Log::error('Mail sending failed: '.$e->getMessage());
            session()->flash('mail_error', 'Warning: Email could not be sent. Please check your SMTP settings.');
        }

        session()->flash('demo_otp', $otp);
        session(['reset_email' => $user->email]);

        return redirect()->route('password.verify');
    }

    public function showVerifyForm()
    {
        if (! session('reset_email')) {
            return redirect()->route('password.request');
        }

        return view('auth.verify-otp-reset');
    }

    public function verifyOtp(Request $request)
    {
        $request->validate([
            'otp' => 'required|numeric',
        ]);

        $email = session('reset_email');
        if (! $email) {
            return redirect()->route('password.request')->withErrors(['email' => 'Session expired. Please try again.']);
        }

        $user = User::where('email', $email)->first();

        if (! $user || $user->otp !== $request->otp || Carbon::now()->greaterThan($user->otp_expires_at)) {
            return back()->withErrors(['otp' => 'Invalid or expired OTP.']);
        }

        $user->otp = null;
        $user->otp_expires_at = null;
        $user->save();

        session(['reset_otp_verified' => true]);

        return redirect()->route('password.reset');
    }

    public function showResetForm()
    {
        if (! session('reset_email') || ! session('reset_otp_verified')) {
            return redirect()->route('password.request');
        }

        return view('auth.reset-password');
    }

    public function resetPassword(Request $request)
    {
        $request->validate([
            'password' => 'required|min:6|confirmed',
        ]);

        $email = session('reset_email');
        if (! $email || ! session('reset_otp_verified')) {
            return redirect()->route('password.request');
        }

        $user = User::where('email', $email)->first();
        if ($user) {
            $user->password = Hash::make($request->password);
            $user->save();
        }

        session()->forget(['reset_email', 'reset_otp_verified']);

        if ($user && $user->role === 'merchant') {
            return redirect('/merchant/login')->with('status', 'Password reset successfully. Please login.');
        } elseif ($user && $user->role === 'admin') {
            return redirect('/admin')->with('status', 'Password reset successfully. Please login.');
        } else {
            return redirect('/customer/login')->with('status', 'Password reset successfully. Please login.');
        }
    }
}
