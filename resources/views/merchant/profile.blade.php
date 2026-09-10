@extends('layouts.merchant')

@section('title', 'Merchant Profile')

@section('content')
<div class="flex-1 overflow-auto p-6 md:p-10">

        
        <div class="flex items-center space-x-4 mb-8 border-b border-slate-200 pb-6">
            <div class="w-24 h-24 bg-white rounded-full flex items-center justify-center shadow-sm border border-slate-200 p-4 relative">
                <svg class="w-full h-full text-[#900000]" viewBox="0 0 24 24" fill="currentColor">
                    <path d="M4 6h16v2H4zm2 4h12v10H6zm3 2v6h6v-6zM3 4h18v2H3z"/>
                </svg>
                <button class="absolute bottom-0 right-0 bg-[#900000] text-white w-8 h-8 rounded-full flex items-center justify-center shadow-md border-2 border-white hover:bg-red-800 transition">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"></path><path stroke-linecap="round" stroke-linejoin="round" d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                </button>
            </div>
            <div>
                <h1 class="text-3xl font-black text-slate-900 mb-1 tracking-tight">Ka-feen Café</h1>
                <p class="text-slate-500 font-medium">Manage your business profile and settings</p>
            </div>
        </div>

        <div class="bg-white rounded-2xl shadow-sm border border-slate-100 overflow-hidden mb-8">
            <div class="px-6 py-5 border-b border-slate-100 bg-slate-50/50">
                <h3 class="font-bold text-slate-900 text-lg">Business Information</h3>
            </div>
            <div class="p-6 grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Field -->
                <div>
                    <label class="block text-xs font-bold text-slate-500 mb-2 uppercase tracking-wide">Business Category</label>
                    <div class="flex items-center space-x-3 bg-slate-50 border border-slate-200 rounded-xl px-4 py-3">
                        <div class="text-red-500"><svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16v12a2 2 0 01-2 2H6a2 2 0 01-2-2V6z"></path><path stroke-linecap="round" stroke-linejoin="round" d="M8 11h8"></path></svg></div>
                        <div class="flex-1 font-semibold text-slate-900">Café</div>
                        <button class="text-slate-400 hover:text-slate-600"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path></svg></button>
                    </div>
                </div>

                <!-- Field -->
                <div>
                    <label class="block text-xs font-bold text-slate-500 mb-2 uppercase tracking-wide">Contact Number</label>
                    <div class="flex items-center space-x-3 bg-slate-50 border border-slate-200 rounded-xl px-4 py-3">
                        <div class="text-purple-500"><svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg></div>
                        <div class="flex-1 font-semibold text-slate-900">+91 98765 43210</div>
                        <button class="text-slate-400 hover:text-slate-600"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path></svg></button>
                    </div>
                </div>

                <!-- Field -->
                <div>
                    <label class="block text-xs font-bold text-slate-500 mb-2 uppercase tracking-wide">Email Address</label>
                    <div class="flex items-center space-x-3 bg-slate-50 border border-slate-200 rounded-xl px-4 py-3">
                        <div class="text-blue-500"><svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg></div>
                        <div class="flex-1 font-semibold text-slate-900">kafeencafe@gmail.com</div>
                        <button class="text-slate-400 hover:text-slate-600"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path></svg></button>
                    </div>
                </div>

                <!-- Field -->
                <div class="md:col-span-2">
                    <label class="block text-xs font-bold text-slate-500 mb-2 uppercase tracking-wide">Business Address</label>
                    <div class="flex items-center space-x-3 bg-slate-50 border border-slate-200 rounded-xl px-4 py-3">
                        <div class="text-rose-500"><svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg></div>
                        <div class="flex-1 font-semibold text-slate-900">123, MG Road, Connaught Place, New Delhi - 110001</div>
                        <button class="text-slate-400 hover:text-slate-600"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path></svg></button>
                    </div>
                </div>
            </div>
        </div>

        <div class="bg-emerald-50 rounded-2xl p-6 border border-emerald-100 flex items-center justify-between mb-8 shadow-sm">
            <div class="flex items-center space-x-4">
                <div class="w-12 h-12 bg-emerald-600 rounded-full flex items-center justify-center text-white shadow-md">
                    <span class="text-xl">👑</span>
                </div>
                <div>
                    <h4 class="text-lg font-black text-slate-900">Pro Plan</h4>
                    <p class="text-sm text-slate-600 font-medium">Valid until 20 Aug 2026</p>
                </div>
            </div>
            <div class="text-right">
                <div class="text-lg font-black text-slate-900">₹999 <span class="text-sm font-medium text-slate-500">/ year</span></div>
            </div>
        </div>

        <!-- Logout Button -->
        <button onclick="document.getElementById('logoutModal').classList.add('active')" class="w-full bg-white hover:bg-red-50 text-[#900000] font-bold py-4 rounded-xl transition flex justify-center items-center space-x-2 border-2 border-red-100 shadow-sm">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path></svg>
            <span>Secure Log Out</span>
        </button>

    </div>
@endsection

