@extends('layouts.admin')

@section('title', 'Admin Dashboard')

@section('content')
<div class="flex-1 overflow-auto p-6 md:p-10">

            
            <!-- Page Header & Date Filter -->
            <div class="flex flex-col md:flex-row md:items-center justify-between mb-10 gap-4">
                <div>
                    <h1 class="text-3xl font-bold text-slate-900 mb-1">Dashboard</h1>
                    <p class="text-sm text-slate-500 font-medium">Welcome back! Here's what's happening with your platform today.</p>
                </div>
                
                <!-- Date Selector -->
                <button class="flex items-center space-x-2 bg-white border border-slate-200 px-4 py-2.5 rounded-xl shadow-sm hover:bg-slate-50 transition text-sm font-semibold text-slate-700">
                    <svg class="w-4 h-4 text-slate-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                    <span>May 24, 2025</span>
                    <svg class="w-4 h-4 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"></path></svg>
                </button>
            </div>

            <!-- Stats Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                
                <!-- Card 1: Active Merchants -->
                <div class="bg-white rounded-2xl p-6 border border-slate-100 shadow-sm flex flex-col items-center justify-center text-center">
                    <div class="w-12 h-12 rounded-full bg-red-50 text-red-600 flex items-center justify-center mb-4">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M16 11c1.66 0 2.99-1.34 2.99-3S17.66 5 16 5c-1.66 0-3 1.34-3 3s1.34 3 3 3zm-8 0c1.66 0 2.99-1.34 2.99-3S9.66 5 8 5C6.34 5 5 6.34 5 8s1.34 3 3 3zm0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5c0-2.33-4.67-3.5-7-3.5zm8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 1.97 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5z"/></svg>
                    </div>
                    <h3 class="text-sm font-semibold text-slate-700 mb-1">Active Merchants</h3>
                    <div class="text-3xl font-black text-slate-900 mb-3">1,248</div>
                    <div class="flex items-center text-xs font-bold text-emerald-600">
                        <svg class="w-3 h-3 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="M5 10l7-7m0 0l7 7m-7-7v18"></path></svg>
                        12.5% <span class="text-slate-400 ml-1 font-medium">vs yesterday</span>
                    </div>
                </div>

                <!-- Card 2: Today's Merchant Onboarding -->
                <div class="bg-white rounded-2xl p-6 border border-slate-100 shadow-sm flex flex-col items-center justify-center text-center">
                    <div class="w-12 h-12 rounded-full bg-red-50 text-red-600 flex items-center justify-center mb-4">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M15 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm-9-2V7H4v3H1v2h3v3h2v-3h3v-2H6zm9 4c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/></svg>
                    </div>
                    <h3 class="text-sm font-semibold text-slate-700 mb-1">Today's Merchant Onboarding</h3>
                    <div class="text-3xl font-black text-slate-900 mb-3">36</div>
                    <div class="flex items-center text-xs font-bold text-emerald-600">
                        <svg class="w-3 h-3 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="M5 10l7-7m0 0l7 7m-7-7v18"></path></svg>
                        16.7% <span class="text-slate-400 ml-1 font-medium">vs yesterday</span>
                    </div>
                </div>

                <!-- Card 3: Today's Revenue -->
                <div class="bg-white rounded-2xl p-6 border border-slate-100 shadow-sm flex flex-col items-center justify-center text-center">
                    <div class="w-12 h-12 rounded-full bg-red-50 text-red-600 flex items-center justify-center mb-4">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"></path></svg>
                    </div>
                    <h3 class="text-sm font-semibold text-slate-700 mb-1">Today's Revenue</h3>
                    <div class="text-3xl font-black text-slate-900 mb-3">₹ 86,540</div>
                    <div class="flex items-center text-xs font-bold text-emerald-600">
                        <svg class="w-3 h-3 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="M5 10l7-7m0 0l7 7m-7-7v18"></path></svg>
                        15.3% <span class="text-slate-400 ml-1 font-medium">vs yesterday</span>
                    </div>
                </div>

                <!-- Card 4: Total Revenue -->
                <div class="bg-white rounded-2xl p-6 border border-slate-100 shadow-sm flex flex-col items-center justify-center text-center">
                    <div class="w-12 h-12 rounded-full bg-red-50 text-red-600 flex items-center justify-center mb-4">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M13.66 7c-.51-1.28-1.92-2-3.66-2C7.38 5 5 7.15 5 10.02c0 1.94 1.13 3.39 2.59 4.31l-.22 2.61L10 16l2.63.95.22-2.61c.42.06.84.1 1.25.1 2.63 0 5-2.15 5-5.02 0-1.1-.38-2.15-1.05-3M12.98 12.82c-1.39 1.13-3.6.45-3.6.45l.13-1.63s1.42.87 2.45.04c.82-.66.86-1.57.86-1.57h-3V8.89h3.04s-.04-.91-.86-1.57c-1.03-.83-2.45.04-2.45.04L9.42 5.73s2.21-.68 3.6.45c1.35 1.09 1.39 2.71 1.39 2.71h-1.42v1.23h1.42s-.04 1.62-1.43 2.7z"/></svg>
                    </div>
                    <h3 class="text-sm font-semibold text-slate-700 mb-1">Total Revenue</h3>
                    <div class="text-3xl font-black text-slate-900 mb-3">₹ 24,85,430</div>
                    <div class="flex items-center text-xs font-bold text-emerald-600">
                        <svg class="w-3 h-3 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="M5 10l7-7m0 0l7 7m-7-7v18"></path></svg>
                        14.8% <span class="text-slate-400 ml-1 font-medium">vs last month</span>
                    </div>
                </div>

            </div>

        </div>

@endsection
