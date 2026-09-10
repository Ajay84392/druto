@extends('layouts.merchant')

@section('title', 'Create Offer - Merchant')

@section('content')
<div class="flex-1 overflow-auto p-6 md:p-10">

        
        <div class="mb-8 border-b border-slate-200 pb-6">
            <h1 class="text-3xl font-black text-slate-900 tracking-tight mb-2">New Reward Offer</h1>
            <p class="text-slate-500 font-medium text-lg">Create a custom incentive to keep your customers coming back.</p>
        </div>

        <div class="bg-white rounded-2xl shadow-sm border border-slate-200 overflow-hidden">
            <div class="px-8 py-6 bg-slate-50 border-b border-slate-100">
                <h3 class="font-bold text-slate-800 text-lg">Offer Details</h3>
            </div>
            <form class="p-8 space-y-6">
                <div>
                    <label class="block text-sm font-bold text-slate-700 mb-2">Offer Title</label>
                    <input type="text" placeholder="e.g. 30% OFF Next Purchase" class="w-full bg-white border border-slate-300 rounded-xl px-4 py-3 focus:outline-none focus:ring-2 focus:ring-[#900000]/20 focus:border-[#900000] font-semibold text-slate-900 transition">
                    <p class="text-xs text-slate-500 mt-2">Keep it short and exciting for your customers.</p>
                </div>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-sm font-bold text-slate-700 mb-2">Stamps Required</label>
                        <select class="w-full bg-white border border-slate-300 rounded-xl px-4 py-3 focus:outline-none focus:ring-2 focus:ring-[#900000]/20 focus:border-[#900000] font-semibold text-slate-900 transition">
                            <option>5 Stamps</option>
                            <option>10 Stamps</option>
                            <option>15 Stamps</option>
                            <option>20 Stamps</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-sm font-bold text-slate-700 mb-2">Valid Until</label>
                        <input type="date" class="w-full bg-white border border-slate-300 rounded-xl px-4 py-3 focus:outline-none focus:ring-2 focus:ring-[#900000]/20 focus:border-[#900000] font-semibold text-slate-900 transition">
                    </div>
                </div>

                <div>
                    <label class="block text-sm font-bold text-slate-700 mb-3">Offer Graphic / Color</label>
                    <div class="flex flex-wrap gap-4 mt-2">
                        <div class="w-16 h-16 rounded-xl bg-gradient-to-br from-[#900000] to-red-600 cursor-pointer border-4 border-slate-800 shadow-md flex items-center justify-center text-white transition transform hover:scale-105">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                        </div>
                        <div class="w-16 h-16 rounded-xl bg-slate-800 cursor-pointer shadow-sm hover:shadow-md transition transform hover:scale-105 border-2 border-transparent"></div>
                        <div class="w-16 h-16 rounded-xl bg-gradient-to-br from-emerald-600 to-teal-700 cursor-pointer shadow-sm hover:shadow-md transition transform hover:scale-105 border-2 border-transparent"></div>
                        <div class="w-16 h-16 rounded-xl bg-gradient-to-br from-blue-600 to-indigo-700 cursor-pointer shadow-sm hover:shadow-md transition transform hover:scale-105 border-2 border-transparent"></div>
                        <div class="w-16 h-16 rounded-xl bg-gradient-to-br from-purple-600 to-fuchsia-700 cursor-pointer shadow-sm hover:shadow-md transition transform hover:scale-105 border-2 border-transparent"></div>
                        <div class="w-16 h-16 rounded-xl bg-gradient-to-br from-orange-500 to-amber-600 cursor-pointer shadow-sm hover:shadow-md transition transform hover:scale-105 border-2 border-transparent"></div>
                    </div>
                </div>

                <div class="pt-8 border-t border-slate-100">
                    <button type="button" class="w-full md:w-auto px-10 bg-[#900000] hover:bg-[#7a0000] text-white font-bold py-4 rounded-xl shadow-md transition flex items-center justify-center space-x-2 text-lg">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4"></path></svg>
                        <span>Publish New Offer</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection

