<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Referral;
use Illuminate\Http\Request;

class ClaimController extends Controller
{
    public function index(Request $request)
    {
        $query = Referral::with('referrer', 'referred')->latest();

        if ($request->filled('search_ref')) {
            $search = $request->search_ref;
            $query->where(function ($q) use ($search) {
                $q->where('code', 'like', "%{$search}%")
                    ->orWhere('referred_email', 'like', "%{$search}%")
                    ->orWhereHas('referrer', function ($q2) use ($search) {
                        $q2->where('name', 'like', "%{$search}%")
                            ->orWhere('email', 'like', "%{$search}%");
                    });
            });
        }

        if ($request->filled('status_ref') && $request->status_ref !== 'All') {
            $query->where('status', $request->status_ref);
        }

        $referrals = $query->paginate(10, ['*'], 'ref_page')->withQueryString();

        return view('admin.claims', compact('referrals'));
    }

    public function show(string $id)
    {
        return view('admin.claims');
    }

    public function edit(string $id)
    {
        return view('admin.claims');
    }

    public function update(Request $request, ?string $id = null)
    {
        return back();
    }

    public function destroy(string $id)
    {
        return back();
    }
}
