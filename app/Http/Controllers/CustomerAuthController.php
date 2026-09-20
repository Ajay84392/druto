<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class CustomerAuthController extends Controller
{
    public function showLogin()
    {
        return view('auth.login');
    }

    public function processLogin(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $user = User::where('email', $request->email)->where('role', 'customer')->first();
        if (! $user || ! Hash::check($request->password, $user->password)) {
            return back()->withErrors(['email' => 'These credentials do not match our records.'])->withInput();
        }

        Auth::login($user, true); // remember by default
        session(['customer_logged_in' => true]);

        return redirect()->route('customer.home');
    }
}
