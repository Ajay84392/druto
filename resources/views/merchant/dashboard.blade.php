@extends('layouts.merchant')

@section('title', 'Merchant Dashboard')

@section('content')
<div class="flex-1 overflow-auto p-6 md:p-10">

        
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-2xl font-black text-slate-900">Overview</h1>
            <select class="bg-white border border-slate-200 text-slate-700 text-sm rounded-lg px-3 py-2 shadow-sm focus:outline-none focus:ring-1 focus:ring-[#900000]">
                <option>This Month</option>
                <option>Last Month</option>
                <option>This Year</option>
            </select>
        </div>

        <!-- 4 Stats Cards Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-10">
            <!-- Total Scans -->
            <div class="bg-white rounded-2xl p-6 shadow-sm border border-slate-100 hover:shadow-md transition">
                <div class="flex items-center justify-between mb-4">
                    <div class="w-12 h-12 rounded-xl bg-red-50 flex items-center justify-center text-[#900000]">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                    </div>
                    <div class="text-sm font-bold text-emerald-500 bg-emerald-50 px-2 py-1 rounded-md">+18.5%</div>
                </div>
                <p class="text-xs font-bold text-slate-400 uppercase tracking-wider mb-1">Total Scans</p>
                <div class="text-3xl font-black text-slate-900">{{ number_format($totalScans) }}</div>
            </div>
            
            <!-- Total Customers -->
            <div class="bg-white rounded-2xl p-6 shadow-sm border border-slate-100 hover:shadow-md transition">
                <div class="flex items-center justify-between mb-4">
                    <div class="w-12 h-12 rounded-xl bg-purple-50 flex items-center justify-center text-purple-600">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                    </div>
                    <div class="text-sm font-bold text-emerald-500 bg-emerald-50 px-2 py-1 rounded-md">+12.3%</div>
                </div>
                <p class="text-xs font-bold text-slate-400 uppercase tracking-wider mb-1">Total Customers</p>
                <div class="text-3xl font-black text-slate-900">{{ number_format($totalCustomers) }}</div>
            </div>

            <!-- Rewards Redeemed -->
            <div class="bg-white rounded-2xl p-6 shadow-sm border border-slate-100 hover:shadow-md transition">
                <div class="flex items-center justify-between mb-4">
                    <div class="w-12 h-12 rounded-xl bg-emerald-50 flex items-center justify-center text-emerald-600">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M12 8v13m0-13V6a2 2 0 112 2h-2zm0 0V5.5A2.5 2.5 0 109.5 8H12zm-7 4h14M5 12a2 2 0 110-4h14a2 2 0 110 4M5 12v7a2 2 0 002 2h10a2 2 0 002-2v-7"></path></svg>
                    </div>
                    <div class="text-sm font-bold text-emerald-500 bg-emerald-50 px-2 py-1 rounded-md">+15.7%</div>
                </div>
                <p class="text-xs font-bold text-slate-400 uppercase tracking-wider mb-1">Rewards Redeemed</p>
                <div class="text-3xl font-black text-slate-900">{{ number_format($rewardsRedeemed) }}</div>
            </div>

            <!-- Repeat Rate -->
            <div class="bg-white rounded-2xl p-6 shadow-sm border border-slate-100 hover:shadow-md transition">
                <div class="flex items-center justify-between mb-4">
                    <div class="w-12 h-12 rounded-xl bg-orange-50 flex items-center justify-center text-orange-500">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"></path></svg>
                    </div>
                    <div class="text-sm font-bold text-emerald-500 bg-emerald-50 px-2 py-1 rounded-md">+8.2%</div>
                </div>
                <p class="text-xs font-bold text-slate-400 uppercase tracking-wider mb-1">Repeat Rate</p>
                <div class="text-3xl font-black text-slate-900">{{ $repeatRate }}%</div>
            </div>
        </div>

        <!-- Two Column Layout for QR and Plan -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
            
            <!-- QR Code Card (Takes 2 cols on wide screens) -->
            <div class="lg:col-span-2 bg-white rounded-[2rem] p-8 shadow-sm border border-slate-100 flex flex-col md:flex-row items-center md:items-start md:space-x-8">
                
                <div class="flex-shrink-0 mb-6 md:mb-0">
                    <div class="w-48 h-48 bg-slate-50 rounded-2xl flex items-center justify-center p-3 relative overflow-hidden border border-slate-200">
                        <div class="w-full h-full" style="background-image: repeating-linear-gradient(45deg, #000 25%, transparent 25%, transparent 75%, #000 75%, #000), repeating-linear-gradient(45deg, #000 25%, transparent 25%, transparent 75%, #000 75%, #000); background-position: 0 0, 8px 8px; background-size: 16px 16px;"></div>
                        <div class="absolute inset-0 m-auto w-12 h-12 bg-[#900000] rounded-lg flex items-center justify-center shadow-xl border-4 border-white">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v13m0-13V6a2 2 0 112 2h-2zm0 0V5.5A2.5 2.5 0 109.5 8H12zm-7 4h14M5 12a2 2 0 110-4h14a2 2 0 110 4M5 12v7a2 2 0 002 2h10a2 2 0 002-2v-7"></path></svg>
                        </div>
                    </div>
                </div>
                
                <div class="flex-1 text-center md:text-left">
                    <h3 class="text-2xl font-black text-slate-900 tracking-tight mb-2">Your Business QR Code</h3>
                    <p class="text-slate-500 font-medium mb-8">Place this code at your checkout counter. Customers simply scan it to collect their loyalty stamps securely without an app.</p>
                    
                    <div class="flex flex-col sm:flex-row items-center space-y-3 sm:space-y-0 sm:space-x-4">
                        <button class="w-full sm:w-auto px-6 bg-[#900000] hover:bg-[#7a0000] text-white font-bold py-3.5 rounded-xl shadow-md transition flex justify-center items-center space-x-2">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path></svg>
                            <span>Download Full HQ</span>
                        </button>
                        <button class="w-full sm:w-auto px-6 bg-white hover:bg-slate-50 border-2 border-slate-200 text-slate-700 font-bold py-3.5 rounded-xl transition flex justify-center items-center space-x-2">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 17h2a2 2 0 002-2v-4a2 2 0 00-2-2H5a2 2 0 00-2 2v4a2 2 0 002 2h2m2 4h6a2 2 0 002-2v-4a2 2 0 00-2-2H9a2 2 0 00-2 2v4a2 2 0 002 2zm8-12V5a2 2 0 00-2-2H9a2 2 0 00-2 2v4h10z"></path></svg>
                            <span>Print Directly</span>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Side Card: Active Plan -->
            <div class="bg-gradient-to-br from-slate-900 to-[#900000] rounded-[2rem] p-8 shadow-xl text-white flex flex-col justify-between">
                <div>
                    <div class="w-12 h-12 bg-white/20 rounded-full flex items-center justify-center backdrop-blur-sm mb-6 shadow-sm">
                        <span class="text-2xl">👑</span>
                    </div>
                    <h4 class="text-xl font-black mb-2">Pro Plan Active</h4>
                    <p class="text-slate-200 text-sm font-medium leading-relaxed">Your business has full access to the premium retention suite.</p>
                </div>
                
                <div class="mt-8">
                    <div class="bg-white/10 rounded-xl p-4 border border-white/20 flex items-center justify-between">
                        <div>
                            <div class="text-xs text-slate-300 font-bold mb-1">Renews On</div>
                            <div class="font-bold">20 Aug 2026</div>
                        </div>
                        <div class="text-right">
                            <div class="text-xs text-slate-300 font-bold mb-1">Pricing</div>
                            <div class="font-bold">₹999 / yr</div>
                        </div>
                    </div>
                    <button class="w-full mt-4 bg-white text-[#900000] hover:bg-slate-100 font-bold py-3 rounded-xl transition shadow-md">
                        Manage Billing
                    </button>
                </div>
            </div>

        </div>
    </div>
@endsection

