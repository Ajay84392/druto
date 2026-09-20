<?php

namespace App\Http\Controllers;

use App\Models\Business;
use App\Models\Customer;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class GoogleAuthController extends Controller
{
    public function redirect($role)
    {
        // Mocking the OAuth redirection for local testing
        return redirect()->route('google.callback', ['role' => $role]);
    }

    public function callback($role)
    {
        $googleEmail = 'demo_'.$role.'@gmail.com';
        $googleName = 'Google '.ucfirst($role);

        $user = User::firstOrCreate(
            ['email' => $googleEmail],
            [
                'name' => $googleName,
                'password' => Hash::make(Str::random(24)),
                'role' => $role,
            ]
        );

        if ($role === 'merchant') {
            Business::firstOrCreate(
                ['email' => $user->email],
                [
                    'user_id' => $user->id,
                    'name' => $user->name,
                    'phone' => '00000'.rand(10000, 99999),
                ]
            );
            Auth::login($user);
            session(['merchant_logged_in' => true]);

            return redirect('/merchant');
        } elseif ($role === 'customer') {
            Customer::firstOrCreate(
                ['email' => $user->email],
                [
                    'name' => $user->name,
                    'phone' => '00000'.rand(10000, 99999),
                ]
            );
            Auth::login($user);
            session(['customer_logged_in' => true]);

            return redirect('/customer');
        }

        return redirect('/');
    }
}
