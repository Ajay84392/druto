<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Offer;
use Illuminate\Http\Request;

class OfferController extends Controller
{
    public function index()
    {
        $offers = Offer::with('business')->latest()->paginate(10);

        return view('admin.offers.index', compact('offers'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        $offer = Offer::findOrFail($id);

        return view('admin.offers.edit', compact('offer'));
    }

    public function update(Request $request, string $id)
    {
        $offer = Offer::findOrFail($id);
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'aurex_coins' => 'required|integer|min:1',
            'expiry' => 'nullable|string',
        ]);
        $offer->update($request->only('title', 'description', 'aurex_coins', 'expiry'));

        return redirect()->route('offers.index')->with('success', 'Offer updated successfully');
    }

    public function destroy(string $id)
    {
        $offer = Offer::findOrFail($id);
        $offer->delete();

        return redirect()->route('offers.index')->with('success', 'Offer deleted successfully');
    }
}
