<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MerchantDashboardController extends Controller
{
    public function index()
    {
        // Get the first business or a default dummy one
        $business = DB::table('businesses')->first();
        
        $totalScans = 0;
        $totalCustomers = 0;
        $rewardsRedeemed = 0;
        $repeatRate = 0;
        $qrCode = null;
        
        if ($business) {
            $totalScans = DB::table('customer_visits')->where('business_id', $business->id)->count();
            $totalCustomers = DB::table('customer_visits')->where('business_id', $business->id)->distinct('customer_id')->count('customer_id');
            // Assuming rewards might be in a customer_rewards table or similar
            // For now, let's just make it count from rewards if redeemed, or just use a dummy if not found
            $rewardsRedeemed = 0; // DB::table('customer_rewards')->where('business_id', $business->id)->where('status', 'redeemed')->count();
            
            // Repeat rate calculation: customers with > 1 visit / total customers
            $repeatCustomers = DB::table('customer_visits')
                ->select('customer_id')
                ->where('business_id', $business->id)
                ->groupBy('customer_id')
                ->havingRaw('COUNT(*) > 1')
                ->get()
                ->count();
                
            $repeatRate = $totalCustomers > 0 ? round(($repeatCustomers / $totalCustomers) * 100) : 0;
            
            $qrCode = DB::table('qr_codes')->where('business_id', $business->id)->first();
        }

        // Dummy data fallback to match the design if DB is empty
        if (!$business) {
            $business = (object)[
                'name' => 'Ka-feen Café',
                'category' => 'Café',
                'contact_number' => '+91 98765 43210',
                'email' => 'kafeencafe@gmail.com',
                'address' => '123, MG Road, Connaught Place, New Delhi - 110001'
            ];
            $totalScans = 2453;
            $totalCustomers = 586;
            $rewardsRedeemed = 128;
            $repeatRate = 42;
        }

        return view('merchant.dashboard', compact(
            'business',
            'totalScans',
            'totalCustomers',
            'rewardsRedeemed',
            'repeatRate',
            'qrCode'
        ));
    }

    public function profile()
    {
        return view('merchant.profile');
    }

    public function rewards()
    {
        return view('merchant.rewards');
    }

    public function createOffer()
    {
        return view('merchant.create-offer');
    }

    // Auth flows
    public function showLogin() { return view('merchant.auth.login'); }
    public function processLogin(\Illuminate\Http\Request $request) { 
        session(['merchant_logged_in' => true]);
        return redirect('/merchant'); 
    }

    public function showRegister() { return view('merchant.auth.register'); }
    
    public function processRegister(\Illuminate\Http\Request $request) { 
        $request->validate([
            'email' => 'required|email'
        ]);

        $user = \App\Models\User::firstOrCreate(
            ['email' => $request->email],
            [
                'name' => 'New Merchant',
                'password' => \Illuminate\Support\Facades\Hash::make('password'),
                'role' => 'merchant'
            ]
        );

        $otp = rand(1000, 9999);
        $user->otp = $otp;
        $user->otp_expires_at = \Carbon\Carbon::now()->addMinutes(10);
        $user->save();

        try {
            \Illuminate\Support\Facades\Mail::to($user->email)->send(new \App\Mail\LoginOtpMail($otp));
        } catch (\Exception $e) {
            \Illuminate\Support\Facades\Log::error('Mail sending failed: ' . $e->getMessage());
            session()->flash('mail_error', 'Warning: Email could not be sent. Please check your SMTP settings.');
        }
        
        // For local testing, flash the OTP to the session so the user can see it on screen
        session()->flash('demo_otp', $otp);

        session(['register_otp_email' => $user->email]);

        return redirect('/merchant/verify'); 
    }

    public function showVerify() { return view('merchant.auth.verify'); }
    
    public function processVerify(\Illuminate\Http\Request $request) { 
        $request->validate(['otp' => 'required|numeric']);
        $email = session('register_otp_email');

        if (!$email) {
            return redirect('/merchant/register')->withErrors(['error' => 'Session expired. Please try again.']);
        }

        $user = \App\Models\User::where('email', $email)->first();

        if (!$user || $user->otp !== $request->otp || \Carbon\Carbon::now()->greaterThan($user->otp_expires_at)) {
            return back()->withErrors(['otp' => 'Invalid or expired OTP.']);
        }

        $user->otp = null;
        $user->otp_expires_at = null;
        $user->save();

        session()->forget('register_otp_email');
        
        // Log them in
        session(['merchant_logged_in' => true]);
        
        return redirect('/merchant/account-created'); 
    }

    public function showCreated() { return view('merchant.auth.created'); }
    public function logout() {
        session()->forget('merchant_logged_in');
        return redirect('/');
    }
}
