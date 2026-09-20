<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = Customer::latest()->paginate(10);

        $totalCustomers = Customer::count();
        $activeCustomers = Customer::where('status', 'Active')->count();
        $newToday = Customer::whereDate('created_at', today())->count();

        // Mock totals for demonstration, since aurex coins/rewards aren't in table yet
        $totalStamps = $totalCustomers * 15;
        $totalRewards = $totalCustomers * 2;

        return view('admin.customers.index', compact('customers', 'totalCustomers', 'activeCustomers', 'newToday', 'totalStamps', 'totalRewards'));
    }

    public function updateStatus(Request $request, string $id)
    {
        $customer = Customer::findOrFail($id);
        $customer->update(['status' => $request->status]);

        return response()->json(['success' => true]);
    }

    public function show(string $id)
    {
        $customer = Customer::findOrFail($id);

        return view('admin.customers.show', compact('customer'));
    }

    public function edit(string $id)
    {
        $customer = Customer::findOrFail($id);

        return view('admin.customers.show', compact('customer'));
    }

    public function update(Request $request, ?string $id = null)
    {
        return back();
    }

    public function destroy(string $id)
    {
        Customer::findOrFail($id)->delete();

        return back()->with('success', 'Customer deleted');
    }
}
