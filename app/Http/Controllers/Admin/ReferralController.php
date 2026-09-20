<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Referral;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ReferralController extends Controller
{
    public function index(Request $request)
    {
        $query = Referral::with('referrer', 'referred')->latest();

        if ($request->filled('search')) {
            $search = $request->search;
            $query->where(function ($q) use ($search) {
                $q->where('code', 'like', "%{$search}%")
                    ->orWhere('referred_email', 'like', "%{$search}%")
                    ->orWhereHas('referrer', function ($q2) use ($search) {
                        $q2->where('name', 'like', "%{$search}%")
                            ->orWhere('email', 'like', "%{$search}%");
                    });
            });
        }

        if ($request->filled('status') && $request->status !== 'All') {
            $query->where('status', $request->status);
        }

        $referrals = $query->paginate(10)->withQueryString();

        return view('admin.referrals.index', compact('referrals'));
    }

    public function create()
    {
        $users = User::orderBy('name')->get();

        return view('admin.referrals.create', compact('users'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'referrer_id' => 'required|exists:users,id',
            'referred_email' => 'nullable|email|max:255',
            'reward_coins' => 'required|integer|min:0',
            'status' => 'required|in:Pending,Completed,Expired',
            'expires_at' => 'nullable|date',
        ]);

        Referral::create([
            'code' => 'REF-'.strtoupper(Str::random(6)),
            'referrer_id' => $request->referrer_id,
            'referred_email' => $request->referred_email,
            'reward_coins' => $request->reward_coins,
            'status' => $request->status,
            'expires_at' => $request->expires_at,
        ]);

        return redirect('/admin/referrals')->with('success', 'Referral created successfully.');
    }

    public function edit(string $id)
    {
        $referral = Referral::findOrFail($id);
        $users = User::orderBy('name')->get();

        return view('admin.referrals.edit', compact('referral', 'users'));
    }

    public function update(Request $request, string $id)
    {
        $referral = Referral::findOrFail($id);

        $request->validate([
            'referrer_id' => 'required|exists:users,id',
            'referred_email' => 'nullable|email|max:255',
            'reward_coins' => 'required|integer|min:0',
            'status' => 'required|in:Pending,Completed,Expired',
            'expires_at' => 'nullable|date',
        ]);

        $referral->update($request->only('referrer_id', 'referred_email', 'reward_coins', 'status', 'expires_at'));

        return redirect('/admin/referrals')->with('success', 'Referral updated successfully.');
    }

    public function destroy(string $id)
    {
        $referral = Referral::findOrFail($id);
        $referral->delete();

        return redirect('/admin/referrals')->with('success', 'Referral deleted successfully.');
    }
}
