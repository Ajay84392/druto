<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Business;
use App\Models\Customer;

class DashboardController extends Controller
{
    public function index()
    {
        $activeMerchants = Business::count();
        $todayMerchants = Business::whereDate('created_at', today())->count();
        $totalCustomers = Customer::count();

        return view('admin.dashboard', compact('activeMerchants', 'todayMerchants', 'totalCustomers'));
    }
}
