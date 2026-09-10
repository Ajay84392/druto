@extends('layouts.customer')

@section('content')
<div class="bg-slate-50 md:bg-transparent min-h-screen md:min-h-0 relative pb-24 md:pb-0">
    
    <!-- Red Header Area (Full Width Web Banner) -->
    <div class="bg-[#900000] px-6 pt-12 pb-24 md:pt-10 md:pb-28 md:px-12 md:rounded-[2rem] relative shadow-xl overflow-hidden">
        <!-- Decorative stars pattern -->
        <div class="absolute inset-0 opacity-10" style="background-image: radial-gradient(#fff 1px, transparent 1px); background-size: 20px 20px;"></div>
        <div class="absolute right-0 top-0 w-64 h-64 bg-red-800 rounded-full blur-3xl opacity-50 translate-x-1/2 -translate-y-1/2"></div>
        
        <div class="relative z-10 flex flex-col md:flex-row md:justify-between md:items-end">
            <div class="mb-6 md:mb-0">
                <p class="text-red-200 text-sm md:text-base font-medium mb-1">Good Evening,</p>
                <h1 class="text-white text-3xl md:text-5xl font-black tracking-tight mb-3">Ajeet Kumar</h1>
                <div class="flex items-center text-xs md:text-sm text-red-100 font-semibold bg-red-950/40 w-max px-4 py-2 rounded-full backdrop-blur-sm border border-red-800/50">
                    <span>Customer ID: LQR-8F4A29</span>
                    <svg class="w-4 h-4 ml-3 cursor-pointer hover:text-white transition" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z"></path></svg>
                </div>
            </div>
            
            <a href="/customer/profile" class="md:hidden w-10 h-10 border border-red-400 rounded-full flex items-center justify-center text-red-100 bg-red-900/50 backdrop-blur-sm shadow-sm absolute top-12 right-6">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z"></path></svg>
            </a>
        </div>
    </div>

    <!-- Main Content Grid -->
    <div class="px-6 md:px-8 -mt-16 relative z-20 grid grid-cols-1 lg:grid-cols-12 gap-6 md:gap-8">
        
        <!-- Left Column: Stats & Cards -->
        <div class="lg:col-span-4 space-y-6">
            <!-- Gold Member Card -->
            <div class="bg-gradient-to-r from-amber-600 to-yellow-500 rounded-2xl p-6 md:p-8 text-white shadow-xl border border-yellow-400 relative overflow-hidden transition transform hover:-translate-y-1">
                <div class="absolute -right-4 -top-12 opacity-20">
                    <svg class="w-40 h-40" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                </div>
                <div class="relative z-10 flex flex-col items-start">
                    <div class="w-14 h-14 bg-white/20 backdrop-blur-md rounded-2xl flex items-center justify-center mb-4">
                        <span class="text-3xl">👑</span>
                    </div>
                    <div>
                        <h3 class="font-black text-2xl mb-1 text-yellow-50">Gold Member</h3>
                        <p class="text-yellow-100 text-sm font-semibold">Member Since • Jul 2026</p>
                    </div>
                </div>
            </div>

            <!-- Quick Stats -->
            <div class="grid grid-cols-2 gap-4">
                <div class="bg-white rounded-2xl p-5 shadow-[0_4px_20px_-4px_rgba(0,0,0,0.05)] border border-slate-100 flex flex-col justify-center items-center text-center">
                    <div class="w-12 h-12 bg-emerald-50 text-emerald-500 rounded-xl flex items-center justify-center mb-3">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M10 6H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V8a2 2 0 00-2-2h-5m-4 0V5a2 2 0 114 0v1m-4 0a2 2 0 104 0m-5 8a2 2 0 100-4 2 2 0 000 4zm0 0c1.306 0 2.417.835 2.83 2M9 14a3.001 3.001 0 00-2.83 2M15 11h3m-3 4h2"></path></svg>
                    </div>
                    <p class="text-[11px] font-black text-slate-400 uppercase tracking-widest mb-1">Active Cards</p>
                    <p class="font-black text-2xl text-slate-900">4</p>
                </div>
                
                <div class="bg-white rounded-2xl p-5 shadow-[0_4px_20px_-4px_rgba(0,0,0,0.05)] border border-slate-100 flex flex-col justify-center items-center text-center">
                    <div class="w-12 h-12 bg-blue-50 text-blue-500 rounded-xl flex items-center justify-center mb-3">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M21 11.25v8.25a1.5 1.5 0 01-1.5 1.5H5.25a1.5 1.5 0 01-1.5-1.5v-8.25M12 4.875A2.625 2.625 0 109.375 7.5H12m0-2.625V7.5m0-2.625A2.625 2.625 0 1114.625 7.5H12m0 0V21m-8.625-9.75h18c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125h-18c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125z"></path></svg>
                    </div>
                    <p class="text-[11px] font-black text-slate-400 uppercase tracking-widest mb-1">Redeemed</p>
                    <p class="font-black text-2xl text-slate-900">3</p>
                </div>
            </div>
        </div>

        <!-- Right Column: Continue Collecting -->
        <div class="lg:col-span-8 lg:mt-24">
            <div class="flex justify-between items-end mb-6 px-1">
                <h2 class="text-2xl font-black text-slate-900 tracking-tight">Continue Collecting</h2>
                <a href="/customer/rewards" class="text-sm font-bold text-[#900000] hover:underline bg-red-50 px-4 py-2 rounded-lg transition">View All</a>
            </div>

            <!-- Web Grid for Business Cards -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                
                <!-- Business Card -->
                <a href="/customer/after-scan" class="block bg-white rounded-2xl shadow-[0_2px_20px_-4px_rgba(0,0,0,0.07)] border border-slate-100 p-6 md:p-8 transition transform hover:-translate-y-1 hover:shadow-[0_10px_30px_-5px_rgba(144,0,0,0.15)] group">
                    <div class="flex justify-between items-start mb-6">
                        <div class="flex items-center space-x-4">
                            <div class="w-16 h-16 bg-slate-900 rounded-2xl flex items-center justify-center text-white shadow-lg group-hover:scale-105 transition">
                                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                            </div>
                            <div>
                                <h3 class="font-black text-slate-900 text-xl mb-0.5">Ka-feen</h3>
                                <p class="text-sm font-semibold text-slate-500">Coffee Shop</p>
                            </div>
                        </div>
                        <div class="text-right">
                            <span class="text-xs font-black text-[#900000] bg-red-50 border border-red-100 px-3 py-1.5 rounded-lg shadow-sm">2 more stamps</span>
                        </div>
                    </div>

                    <!-- Stamps Progress -->
                    <div class="flex items-center space-x-3 mb-3">
                        <div class="w-9 h-9 bg-[#900000] rounded-full flex items-center justify-center text-white shadow-inner"><svg class="w-5 h-5" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z"/></svg></div>
                        <div class="w-9 h-9 bg-[#900000] rounded-full flex items-center justify-center text-white shadow-inner"><svg class="w-5 h-5" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z"/></svg></div>
                        <div class="w-9 h-9 bg-[#900000] rounded-full flex items-center justify-center text-white shadow-inner"><svg class="w-5 h-5" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z"/></svg></div>
                        <div class="w-9 h-9 bg-slate-50 border-2 border-slate-200 rounded-full border-dashed"></div>
                        <div class="w-9 h-9 bg-slate-50 border-2 border-slate-200 rounded-full border-dashed"></div>
                    </div>
                    <p class="text-xs font-bold text-slate-400 mb-6">3 of 5 Stamps</p>

                    <!-- Next Reward Banner -->
                    <div class="bg-gradient-to-r from-red-50 to-white rounded-xl p-4 flex justify-between items-center border border-red-100 group-hover:border-red-200 transition">
                        <div class="flex items-center space-x-4">
                            <div class="w-10 h-10 bg-[#900000] text-white rounded-full flex items-center justify-center shadow-sm">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                            </div>
                            <div>
                                <p class="text-sm font-black text-[#900000] mb-0.5">30% off on next purchase</p>
                                <p class="text-xs font-semibold text-slate-500">Collect 2 more stamps to unlock</p>
                            </div>
                        </div>
                        <div class="bg-white p-2 rounded-full shadow-sm text-[#900000] group-hover:bg-[#900000] group-hover:text-white transition">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"></path></svg>
                        </div>
                    </div>
                </a>

                <!-- Add a dummy second card to show grid scaling -->
                <a href="#" class="block bg-white rounded-2xl shadow-[0_2px_20px_-4px_rgba(0,0,0,0.07)] border border-slate-100 p-6 md:p-8 transition transform hover:-translate-y-1 hover:shadow-[0_10px_30px_-5px_rgba(144,0,0,0.15)] group opacity-75">
                    <div class="flex justify-between items-start mb-6">
                        <div class="flex items-center space-x-4">
                            <div class="w-16 h-16 bg-blue-900 rounded-2xl flex items-center justify-center text-white shadow-lg">
                                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                            </div>
                            <div>
                                <h3 class="font-black text-slate-900 text-xl mb-0.5">Brew House</h3>
                                <p class="text-sm font-semibold text-slate-500">Cafe & Bakery</p>
                            </div>
                        </div>
                        <div class="text-right">
                            <span class="text-xs font-black text-blue-700 bg-blue-50 border border-blue-100 px-3 py-1.5 rounded-lg shadow-sm">4 more stamps</span>
                        </div>
                    </div>

                    <!-- Stamps Progress -->
                    <div class="flex items-center space-x-3 mb-3">
                        <div class="w-9 h-9 bg-blue-600 rounded-full flex items-center justify-center text-white shadow-inner"><svg class="w-5 h-5" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z"/></svg></div>
                        <div class="w-9 h-9 bg-slate-50 border-2 border-slate-200 rounded-full border-dashed"></div>
                        <div class="w-9 h-9 bg-slate-50 border-2 border-slate-200 rounded-full border-dashed"></div>
                        <div class="w-9 h-9 bg-slate-50 border-2 border-slate-200 rounded-full border-dashed"></div>
                        <div class="w-9 h-9 bg-slate-50 border-2 border-slate-200 rounded-full border-dashed"></div>
                    </div>
                    <p class="text-xs font-bold text-slate-400 mb-6">1 of 5 Stamps</p>

                    <!-- Next Reward Banner -->
                    <div class="bg-gradient-to-r from-slate-50 to-white rounded-xl p-4 flex justify-between items-center border border-slate-100 group-hover:border-slate-200 transition">
                        <div class="flex items-center space-x-4">
                            <div class="w-10 h-10 bg-slate-200 text-slate-500 rounded-full flex items-center justify-center shadow-sm">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                            </div>
                            <div>
                                <p class="text-sm font-black text-slate-700 mb-0.5">Free Pastry</p>
                                <p class="text-xs font-semibold text-slate-500">Collect 4 more stamps to unlock</p>
                            </div>
                        </div>
                    </div>
                </a>

            </div>
        </div>

    </div>

</div>
@endsection
