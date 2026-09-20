<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Business;
use App\Models\Plan;
use Carbon\Carbon;
use Illuminate\Http\Request;

class MerchantController extends Controller
{
    public function index()
    {
        $merchants = Business::latest()->paginate(10);
        $totalMerchants = Business::count();
        $activeMerchants = Business::where('status', 'Active')->count();
        $trialMerchants = Business::where('status', 'Trial')->count();
        $pendingPayment = Business::where('status', 'Pending Payment')->count();
        $onboardingToday = Business::whereDate('created_at', today())->count();
        $plans = Plan::where('is_active', true)->get();

        return view('admin.merchants.index', compact('merchants', 'totalMerchants', 'activeMerchants', 'trialMerchants', 'pendingPayment', 'onboardingToday', 'plans'));
    }

    public function updateStatus(Request $request, string $id)
    {
        $merchant = Business::findOrFail($id);
        $merchant->update(['status' => $request->status]);

        return response()->json(['success' => true]);
    }

    public function show(string $id)
    {
        $merchant = Business::findOrFail($id);

        return view('admin.merchants.show', compact('merchant'));
    }

    public function edit(string $id)
    {
        $merchant = Business::findOrFail($id);

        return view('admin.merchants.edit', compact('merchant'));
    }

    public function update(Request $request, ?string $id = null)
    {
        $merchant = Business::findOrFail($id);
        $merchant->update($request->all());

        return back()->with('success', 'Updated');
    }

    public function extendValidity(Request $request, string $id)
    {
        $request->validate(['extend_days' => 'required|integer|min:1']);

        $merchant = Business::findOrFail($id);

        // If plan_valid_till exists and is in the future, extend from there; otherwise extend from today
        $baseDate = $merchant->plan_valid_till && Carbon::parse($merchant->plan_valid_till)->isFuture()
            ? Carbon::parse($merchant->plan_valid_till)
            : now();

        $newDate = $baseDate->addDays((int) $request->extend_days);

        $merchant->update([
            'plan_valid_till' => $newDate,
            'status' => 'Active',
        ]);

        $days = (int) $request->extend_days;
        $label = match (true) {
            $days >= 36500 => 'Forever',
            $days >= 365 => '1 Year',
            $days >= 180 => '180 Days',
            $days >= 90 => '90 Days',
            $days >= 30 => '30 Days',
            $days >= 15 => '15 Days',
            default => '1 Week',
        };

        return back()->with('success', "Plan validity for {$merchant->business_name} extended by {$label}. New expiry: ".$newDate->format('M d, Y'));
    }

    public function destroy(string $id)
    {
        Business::destroy($id);

        return back()->with('success', 'Deleted');
    }
}
