@extends('layouts.merchant')

@section('title', 'Merchant Rewards')

@section('content')
<div class="flex-1 overflow-auto p-6 md:p-10">

        
        <div class="flex flex-col md:flex-row md:items-center justify-between mb-8 space-y-4 md:space-y-0">
            <div>
                <h1 class="text-2xl font-black text-slate-900 tracking-tight">Reward Requests</h1>
                <p class="text-sm text-slate-500 font-medium">Manage and approve customer reward claims.</p>
            </div>
            
            <!-- Web Tabs -->
            <div class="inline-flex bg-white p-1.5 rounded-xl shadow-sm border border-slate-200">
                <button class="px-6 py-2 bg-[#900000] text-white rounded-lg text-sm font-bold shadow-sm flex items-center space-x-2">
                    <span>Pending</span>
                    <span class="bg-white text-[#900000] px-2 py-0.5 rounded-md text-xs">3</span>
                </button>
                <button class="px-6 py-2 text-slate-600 hover:text-slate-900 rounded-lg text-sm font-bold transition">Approved</button>
                <button class="px-6 py-2 text-slate-600 hover:text-slate-900 rounded-lg text-sm font-bold transition">Declined</button>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            
            <!-- Request Card 1 -->
            <div class="bg-white rounded-2xl p-6 border border-slate-200 shadow-sm hover:shadow-md transition">
                <div class="flex items-start">
                    <div class="w-20 h-24 bg-gradient-to-br from-[#900000] to-red-600 rounded-xl flex-shrink-0 flex flex-col justify-center items-center text-white p-2 shadow-inner">
                        <span class="text-[10px] font-bold opacity-80 mb-1">Coupon</span>
                        <span class="text-xl font-black leading-tight text-center">30%<br>OFF</span>
                    </div>
                    
                    <div class="ml-5 flex-1">
                        <div class="flex justify-between items-start">
                            <h3 class="text-lg font-black text-slate-900 leading-tight">Sumit</h3>
                            <span class="bg-orange-50 text-orange-600 text-[10px] font-bold px-2 py-1 rounded-md uppercase">Pending</span>
                        </div>
                        <p class="text-xs text-slate-400 font-semibold mb-3">ID: LQR-8F4A29</p>
                        
                        <p class="text-sm font-bold text-[#900000] mb-3 leading-tight">30% OFF on Next Purchase</p>
                        
                        <div class="space-y-1">
                            <div class="flex items-center text-xs text-slate-500 space-x-1.5 font-medium">
                                <svg class="w-4 h-4 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                <span>Today, 2:18 PM</span>
                            </div>
                            <div class="flex items-center text-xs text-slate-500 space-x-1.5 font-medium">
                                <svg class="w-4 h-4 text-red-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                                <span>Expires: 30 Jul 2026</span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="flex space-x-4 mt-6 pt-5 border-t border-slate-100">
                    <button class="flex-1 bg-white border-2 border-slate-200 hover:border-red-200 hover:text-red-600 text-slate-600 font-bold py-2.5 rounded-xl text-sm transition">Decline</button>
                    <button class="flex-1 bg-[#059669] hover:bg-emerald-700 text-white font-bold py-2.5 rounded-xl text-sm transition shadow-sm">Accept Reward</button>
                </div>
            </div>

            <!-- Request Card 2 -->
            <div class="bg-white rounded-2xl p-6 border border-slate-200 shadow-sm hover:shadow-md transition">
                <div class="flex items-start">
                    <div class="w-20 h-24 bg-slate-800 rounded-xl flex-shrink-0 flex flex-col justify-center items-center text-white p-2 shadow-inner">
                        <span class="text-[10px] font-bold opacity-80 mb-1">FREE</span>
                        <span class="text-sm font-black leading-tight text-center">COFFEE</span>
                    </div>
                    
                    <div class="ml-5 flex-1">
                        <div class="flex justify-between items-start">
                            <h3 class="text-lg font-black text-slate-900 leading-tight">Ajeet</h3>
                            <span class="bg-orange-50 text-orange-600 text-[10px] font-bold px-2 py-1 rounded-md uppercase">Pending</span>
                        </div>
                        <p class="text-xs text-slate-400 font-semibold mb-3">ID: LQR-3K9D21</p>
                        
                        <p class="text-sm font-bold text-slate-800 mb-3 leading-tight">Free Coffee on Any Purchase</p>
                        
                        <div class="space-y-1">
                            <div class="flex items-center text-xs text-slate-500 space-x-1.5 font-medium">
                                <svg class="w-4 h-4 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                <span>Today, 12:45 PM</span>
                            </div>
                            <div class="flex items-center text-xs text-slate-500 space-x-1.5 font-medium">
                                <svg class="w-4 h-4 text-red-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                                <span>Expires: 28 Jul 2026</span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="flex space-x-4 mt-6 pt-5 border-t border-slate-100">
                    <button class="flex-1 bg-white border-2 border-slate-200 hover:border-red-200 hover:text-red-600 text-slate-600 font-bold py-2.5 rounded-xl text-sm transition">Decline</button>
                    <button class="flex-1 bg-[#059669] hover:bg-emerald-700 text-white font-bold py-2.5 rounded-xl text-sm transition shadow-sm">Accept Reward</button>
                </div>
            </div>

            <!-- Request Card 3 -->
            <div class="bg-white rounded-2xl p-6 border border-slate-200 shadow-sm hover:shadow-md transition">
                <div class="flex items-start">
                    <div class="w-20 h-24 bg-gradient-to-br from-emerald-600 to-teal-700 rounded-xl flex-shrink-0 flex flex-col justify-center items-center text-white p-2 shadow-inner">
                        <span class="text-xl font-black leading-tight text-center">20%<br>OFF</span>
                    </div>
                    
                    <div class="ml-5 flex-1">
                        <div class="flex justify-between items-start">
                            <h3 class="text-lg font-black text-slate-900 leading-tight">Pooja</h3>
                            <span class="bg-orange-50 text-orange-600 text-[10px] font-bold px-2 py-1 rounded-md uppercase">Pending</span>
                        </div>
                        <p class="text-xs text-slate-400 font-semibold mb-3">ID: LQR-7H2M56</p>
                        
                        <p class="text-sm font-bold text-emerald-700 mb-3 leading-tight">20% OFF on Next Purchase</p>
                        
                        <div class="space-y-1">
                            <div class="flex items-center text-xs text-slate-500 space-x-1.5 font-medium">
                                <svg class="w-4 h-4 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                <span>Yesterday, 6:30 PM</span>
                            </div>
                            <div class="flex items-center text-xs text-slate-500 space-x-1.5 font-medium">
                                <svg class="w-4 h-4 text-red-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                                <span>Expires: 27 Jul 2026</span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="flex space-x-4 mt-6 pt-5 border-t border-slate-100">
                    <button class="flex-1 bg-white border-2 border-slate-200 hover:border-red-200 hover:text-red-600 text-slate-600 font-bold py-2.5 rounded-xl text-sm transition">Decline</button>
                    <button class="flex-1 bg-[#059669] hover:bg-emerald-700 text-white font-bold py-2.5 rounded-xl text-sm transition shadow-sm">Accept Reward</button>
                </div>
            </div>

        </div>

    </div>
@endsection

