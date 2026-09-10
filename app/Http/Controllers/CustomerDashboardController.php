<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerDashboardController extends Controller
{
    public function index()
    {
        return view('customer.home');
    }

    public function scan()
    {
        return view('customer.scan');
    }

    public function afterScan()
    {
        return view('customer.after-scan');
    }

    public function rewards()
    {
        return view('customer.rewards');
    }

    public function profile()
    {
        return view('customer.profile');
    }

    public function logout()
    {
        session()->forget('customer_logged_in');
        return redirect('/');
    }
}
