@extends('layouts.admin')

@section('title', 'Claim Logs')

@section('content')
    <div class="flex-1 overflow-auto p-4 md:p-8" x-data="{ activeTab: '{{ request()->has('ref_page') || request()->has('search_ref') ? 'referrals' : 'claims' }}' }">

        <!-- Page Header & Breadcrumbs -->
        <div class="mb-6">
            <h1 class="text-2xl font-bold text-[#0f172a] mb-1">Activity & Logs</h1>
            <div class="text-xs text-[#475569] font-medium flex items-center space-x-1 mb-6">
                <a href="/admin/dashboard" class="hover:text-[#b00000] transition">Home</a>
                <svg class="w-3 h-3 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"></path>
                </svg>
                <span class="text-[#0f172a]">Activity Logs</span>
            </div>

            <!-- Tabs -->
            <div class="flex space-x-4 border-b border-[#e2e8f0]">
                <button @click="activeTab = 'claims'" :class="activeTab === 'claims' ? 'border-[#b00000] text-[#b00000]' : 'border-transparent text-slate-500 hover:text-slate-700 hover:border-slate-300'" class="px-1 py-3 text-sm font-bold border-b-2 transition whitespace-nowrap">
                    Claim Logs
                </button>
                <button @click="activeTab = 'referrals'" :class="activeTab === 'referrals' ? 'border-[#b00000] text-[#b00000]' : 'border-transparent text-slate-500 hover:text-slate-700 hover:border-slate-300'" class="px-1 py-3 text-sm font-bold border-b-2 transition whitespace-nowrap">
                    Referrals
                </button>
            </div>
        </div>

        <!-- Claims Tab Content -->
        <div x-show="activeTab === 'claims'" style="display: none;" class="bg-white rounded-2xl shadow-sm border border-[#e2e8f0] overflow-hidden flex flex-col">

            <!-- Controls Row 1 -->
            <div class="p-5 border-b border-[#e2e8f0] flex flex-col xl:flex-row items-center gap-3 flex-wrap justify-between">
                <div class="flex flex-col lg:flex-row items-center gap-3 flex-wrap w-full xl:w-auto">
                    <!-- Search -->
                    <div class="relative w-full lg:w-80">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <svg class="h-4 w-4 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                            </svg>
                        </div>
                        <input type="text"
                            class="block w-full pl-9 pr-3 py-2 border border-[#e2e8f0] rounded-xl leading-5 bg-white placeholder-slate-400 focus:outline-none focus:ring-1 focus:ring-red-500 focus:border-red-500 text-sm transition"
                            placeholder="Search by claim ID, customer or merchant...">
                    </div>

                    <!-- Filters -->
                    <select
                        class="block w-full lg:w-auto pl-3 pr-8 py-2 border border-[#e2e8f0] rounded-xl leading-5 bg-white text-slate-700 text-sm font-medium focus:outline-none focus:ring-1 focus:ring-red-500 focus:border-red-500 transition">
                        <option>All Merchants</option>
                        <option>Coffee House</option>
                        <option>Pizza Plaza</option>
                        <option>Burger Point</option>
                    </select>
                    <select
                        class="block w-full lg:w-auto pl-3 pr-8 py-2 border border-[#e2e8f0] rounded-xl leading-5 bg-white text-slate-700 text-sm font-medium focus:outline-none focus:ring-1 focus:ring-red-500 focus:border-red-500 transition">
                        <option>All Status</option>
                        <option>Success</option>
                        <option>Pending</option>
                        <option>Failed</option>
                    </select>
                    <select
                        class="block w-full lg:w-auto pl-3 pr-8 py-2 border border-[#e2e8f0] rounded-xl leading-5 bg-white text-slate-700 text-sm font-medium focus:outline-none focus:ring-1 focus:ring-red-500 focus:border-red-500 transition">
                        <option>All Reward Types</option>
                        <option>Free Item</option>
                        <option>Discount</option>
                    </select>
                </div>

                <!-- Export Button -->
                <button
                    class="flex items-center justify-center space-x-2 border border-red-200 bg-red-50 text-[#b00000] px-4 py-2 rounded-xl text-sm font-bold hover:bg-red-100 transition w-full xl:w-auto shrink-0">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path>
                    </svg>
                    <span>Export</span>
                </button>
            </div>

            <!-- Controls Row 2: Date Range (from image it seems to be below or next to it) -->
            <div class="px-5 py-4 border-b border-[#e2e8f0] bg-[#f1f5f9] flex items-center">
                <button
                    class="flex items-center justify-between w-64 border border-[#e2e8f0] bg-white text-slate-700 px-4 py-2 rounded-xl text-sm font-medium hover:bg-[#f1f5f9] transition">
                    <span>Date Range</span>
                    <svg class="w-4 h-4 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z">
                        </path>
                    </svg>
                </button>
            </div>

            <!-- Table -->
            <div class="overflow-x-auto w-full">
                <table class="w-full text-left border-collapse">
                    <thead>
                    <tr class="bg-[#f1f5f9] border-b border-[#e2e8f0] text-xs font-bold text-[#475569] uppercase tracking-wider">
                            <th class="px-5 py-4 w-12 text-center">#</th>
                            <th class="px-5 py-4">Claim ID</th>
                            <th class="px-5 py-4">Customer</th>
                            <th class="px-5 py-4">Merchant</th>
                            <th class="px-5 py-4">Reward</th>
                            <th class="px-5 py-4 text-center">Points Used</th>
                            <th class="px-5 py-4">Status</th>
                            <th class="px-5 py-4">Claimed At</th>
                            <th class="px-5 py-4 text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-100 text-sm">
                        <!-- Row 1 -->
                        <tr class="hover:bg-[#f1f5f9]/50 transition">
                            <td class="px-5 py-4 text-center text-[#475569]">1</td>
                            <td class="px-5 py-4 font-bold text-slate-700">CL-DA90878P</td>
                            <td class="px-5 py-4">Rahul Sharma</td>
                            <td class="px-5 py-4 text-[#475569]">Coffee House</td>
                            <td class="px-5 py-4 text-[#475569]">Free Coffee</td>
                            <td class="px-5 py-4 text-center font-bold text-slate-700">100</td>
                            <td class="px-5 py-4"><span
                                    class="inline-flex items-center px-2 py-0.5 rounded text-[11px] font-bold bg-emerald-100 text-emerald-700">Success</span>
                            </td>
                            <td class="px-5 py-4 text-[#475569] text-xs">May 24, 2026, 11:20 AM</td>
                            <td class="px-5 py-4 text-center whitespace-nowrap"><button
                                    class="text-slate-400 hover:text-[#b00000] transition"><svg class="w-5 h-5 inline"
                                        fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z">
                                        </path>
                                    </svg></button></td>
                        </tr>
                        <!-- Row 2 -->
                        <tr class="hover:bg-[#f1f5f9]/50 transition">
                            <td class="px-5 py-4 text-center text-[#475569]">2</td>
                            <td class="px-5 py-4 font-bold text-slate-700">CL-86BFA48P</td>
                            <td class="px-5 py-4">Priya Singh</td>
                            <td class="px-5 py-4 text-[#475569]">Pizza Plaza</td>
                            <td class="px-5 py-4 text-[#475569]">20% Discount</td>
                            <td class="px-5 py-4 text-center font-bold text-slate-700">150</td>
                            <td class="px-5 py-4"><span
                                    class="inline-flex items-center px-2 py-0.5 rounded text-[11px] font-bold bg-emerald-100 text-emerald-700">Success</span>
                            </td>
                            <td class="px-5 py-4 text-[#475569] text-xs">May 24, 2026, 10:45 AM</td>
                            <td class="px-5 py-4 text-center whitespace-nowrap"><button
                                    class="text-slate-400 hover:text-[#b00000] transition"><svg class="w-5 h-5 inline"
                                        fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z">
                                        </path>
                                    </svg></button></td>
                        </tr>
                        <!-- Row 3 -->
                        <tr class="hover:bg-[#f1f5f9]/50 transition">
                            <td class="px-5 py-4 text-center text-[#475569]">3</td>
                            <td class="px-5 py-4 font-bold text-slate-700">CL-DB0B1A8P</td>
                            <td class="px-5 py-4">Amit Patel</td>
                            <td class="px-5 py-4 text-[#475569]">Burger Point</td>
                            <td class="px-5 py-4 text-[#475569]">Free Burger</td>
                            <td class="px-5 py-4 text-center font-bold text-slate-700">200</td>
                            <td class="px-5 py-4"><span
                                    class="inline-flex items-center px-2 py-0.5 rounded text-[11px] font-bold bg-emerald-100 text-emerald-700">Success</span>
                            </td>
                            <td class="px-5 py-4 text-[#475569] text-xs">May 24, 2026, 09:30 AM</td>
                            <td class="px-5 py-4 text-center whitespace-nowrap"><button
                                    class="text-slate-400 hover:text-[#b00000] transition"><svg class="w-5 h-5 inline"
                                        fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z">
                                        </path>
                                    </svg></button></td>
                        </tr>
                        <!-- Row 4 -->
                        <tr class="hover:bg-[#f1f5f9]/50 transition">
                            <td class="px-5 py-4 text-center text-[#475569]">4</td>
                            <td class="px-5 py-4 font-bold text-slate-700">CL-A3D4008P</td>
                            <td class="px-5 py-4">Neha Verma</td>
                            <td class="px-5 py-4 text-[#475569]">Fashion Hub</td>
                            <td class="px-5 py-4 text-[#475569]">₹100 Off</td>
                            <td class="px-5 py-4 text-center font-bold text-slate-700">250</td>
                            <td class="px-5 py-4"><span
                                    class="inline-flex items-center px-2 py-0.5 rounded text-[11px] font-bold bg-orange-100 text-orange-700">Pending</span>
                            </td>
                            <td class="px-5 py-4 text-[#475569] text-xs">May 24, 2026, 09:15 AM</td>
                            <td class="px-5 py-4 text-center whitespace-nowrap"><button
                                    class="text-slate-400 hover:text-[#b00000] transition"><svg class="w-5 h-5 inline"
                                        fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z">
                                        </path>
                                    </svg></button></td>
                        </tr>
                        <!-- Row 5 -->
                        <tr class="hover:bg-[#f1f5f9]/50 transition">
                            <td class="px-5 py-4 text-center text-[#475569]">5</td>
                            <td class="px-5 py-4 font-bold text-slate-700">CL-E33F098P</td>
                            <td class="px-5 py-4">Vikas Mehta</td>
                            <td class="px-5 py-4 text-[#475569]">Coffee House</td>
                            <td class="px-5 py-4 text-[#475569]">Free Sandwich</td>
                            <td class="px-5 py-4 text-center font-bold text-slate-700">120</td>
                            <td class="px-5 py-4"><span
                                    class="inline-flex items-center px-2 py-0.5 rounded text-[11px] font-bold bg-emerald-100 text-emerald-700">Success</span>
                            </td>
                            <td class="px-5 py-4 text-[#475569] text-xs">May 23, 2026, 08:50 PM</td>
                            <td class="px-5 py-4 text-center whitespace-nowrap"><button
                                    class="text-slate-400 hover:text-[#b00000] transition"><svg class="w-5 h-5 inline"
                                        fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z">
                                        </path>
                                    </svg></button></td>
                        </tr>
                        <!-- Row 6 -->
                        <tr class="hover:bg-[#f1f5f9]/50 transition">
                            <td class="px-5 py-4 text-center text-[#475569]">6</td>
                            <td class="px-5 py-4 font-bold text-slate-700">CL-F0B3E08P</td>
                            <td class="px-5 py-4">Sneha Reddy</td>
                            <td class="px-5 py-4 text-[#475569]">Pizza Plaza</td>
                            <td class="px-5 py-4 text-[#475569]">Free Drink</td>
                            <td class="px-5 py-4 text-center font-bold text-slate-700">80</td>
                            <td class="px-5 py-4"><span
                                    class="inline-flex items-center px-2 py-0.5 rounded text-[11px] font-bold bg-red-100 text-[#8a0000]">Failed</span>
                            </td>
                            <td class="px-5 py-4 text-[#475569] text-xs">May 23, 2026, 08:20 PM</td>
                            <td class="px-5 py-4 text-center whitespace-nowrap"><button
                                    class="text-slate-400 hover:text-[#b00000] transition"><svg class="w-5 h-5 inline"
                                        fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z">
                                        </path>
                                    </svg></button></td>
                        </tr>
                        <!-- Row 7 -->
                        <tr class="hover:bg-[#f1f5f9]/50 transition">
                            <td class="px-5 py-4 text-center text-[#475569]">7</td>
                            <td class="px-5 py-4 font-bold text-slate-700">CL-519D338P</td>
                            <td class="px-5 py-4">Karan Singh</td>
                            <td class="px-5 py-4 text-[#475569]">Burger Point</td>
                            <td class="px-5 py-4 text-[#475569]">20% Discount</td>
                            <td class="px-5 py-4 text-center font-bold text-slate-700">150</td>
                            <td class="px-5 py-4"><span
                                    class="inline-flex items-center px-2 py-0.5 rounded text-[11px] font-bold bg-emerald-100 text-emerald-700">Success</span>
                            </td>
                            <td class="px-5 py-4 text-[#475569] text-xs">May 23, 2026, 07:45 PM</td>
                            <td class="px-5 py-4 text-center whitespace-nowrap"><button
                                    class="text-slate-400 hover:text-[#b00000] transition"><svg class="w-5 h-5 inline"
                                        fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z">
                                        </path>
                                    </svg></button></td>
                        </tr>
                        <!-- Row 8 -->
                        <tr class="hover:bg-[#f1f5f9]/50 transition">
                            <td class="px-5 py-4 text-center text-[#475569]">8</td>
                            <td class="px-5 py-4 font-bold text-slate-700">CL-ACABB98P</td>
                            <td class="px-5 py-4">Ishita Malhotra</td>
                            <td class="px-5 py-4 text-[#475569]">Fashion Hub</td>
                            <td class="px-5 py-4 text-[#475569]">₹200 Off</td>
                            <td class="px-5 py-4 text-center font-bold text-slate-700">300</td>
                            <td class="px-5 py-4"><span
                                    class="inline-flex items-center px-2 py-0.5 rounded text-[11px] font-bold bg-orange-100 text-orange-700">Pending</span>
                            </td>
                            <td class="px-5 py-4 text-[#475569] text-xs">May 23, 2026, 07:10 PM</td>
                            <td class="px-5 py-4 text-center whitespace-nowrap"><button
                                    class="text-slate-400 hover:text-[#b00000] transition"><svg class="w-5 h-5 inline"
                                        fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z">
                                        </path>
                                    </svg></button></td>
                        </tr>
                        <!-- Row 9 -->
                        <tr class="hover:bg-[#f1f5f9]/50 transition">
                            <td class="px-5 py-4 text-center text-[#475569]">9</td>
                            <td class="px-5 py-4 font-bold text-slate-700">CL-F90B908P</td>
                            <td class="px-5 py-4">Rohit Kumar</td>
                            <td class="px-5 py-4 text-[#475569]">Coffee House</td>
                            <td class="px-5 py-4 text-[#475569]">Free Coffee</td>
                            <td class="px-5 py-4 text-center font-bold text-slate-700">100</td>
                            <td class="px-5 py-4"><span
                                    class="inline-flex items-center px-2 py-0.5 rounded text-[11px] font-bold bg-emerald-100 text-emerald-700">Success</span>
                            </td>
                            <td class="px-5 py-4 text-[#475569] text-xs">May 23, 2026, 06:30 PM</td>
                            <td class="px-5 py-4 text-center whitespace-nowrap"><button
                                    class="text-slate-400 hover:text-[#b00000] transition"><svg class="w-5 h-5 inline"
                                        fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z">
                                        </path>
                                    </svg></button></td>
                        </tr>
                        <!-- Row 10 -->
                        <tr class="hover:bg-[#f1f5f9]/50 transition">
                            <td class="px-5 py-4 text-center text-[#475569]">10</td>
                            <td class="px-5 py-4 font-bold text-slate-700">CL-1F5B518P</td>
                            <td class="px-5 py-4">Anjali Gupta</td>
                            <td class="px-5 py-4 text-[#475569]">Pizza Plaza</td>
                            <td class="px-5 py-4 text-[#475569]">Free Pizza Slice</td>
                            <td class="px-5 py-4 text-center font-bold text-slate-700">180</td>
                            <td class="px-5 py-4"><span
                                    class="inline-flex items-center px-2 py-0.5 rounded text-[11px] font-bold bg-red-100 text-[#8a0000]">Failed</span>
                            </td>
                            <td class="px-5 py-4 text-[#475569] text-xs">May 23, 2026, 05:50 PM</td>
                            <td class="px-5 py-4 text-center whitespace-nowrap"><button
                                    class="text-slate-400 hover:text-[#b00000] transition"><svg class="w-5 h-5 inline"
                                        fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z">
                                        </path>
                                    </svg></button></td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- Pagination Footer -->
            <div
                class="p-4 border-t border-[#e2e8f0] flex flex-col md:flex-row items-center justify-between gap-4 bg-white text-sm text-[#475569]">
                <div class="font-medium">Showing 1 to 10 of 245 entries</div>
                <div class="flex items-center space-x-1">
                    <button
                        class="w-8 h-8 flex items-center justify-center rounded-xl border border-[#e2e8f0] text-slate-400 hover:bg-[#f1f5f9] transition"
                        disabled>
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7">
                            </path>
                        </svg>
                    </button>
                    <button
                        class="w-8 h-8 flex items-center justify-center rounded-xl bg-[#b00000] text-white font-bold shadow-sm">1</button>
                    <button
                        class="w-8 h-8 flex items-center justify-center rounded-xl border border-[#e2e8f0] text-[#475569] hover:bg-[#f1f5f9] font-bold transition">2</button>
                    <button
                        class="w-8 h-8 flex items-center justify-center rounded-xl border border-[#e2e8f0] text-[#475569] hover:bg-[#f1f5f9] font-bold transition">3</button>
                    <button
                        class="w-8 h-8 flex items-center justify-center rounded-xl border border-[#e2e8f0] text-[#475569] hover:bg-[#f1f5f9] font-bold transition">4</button>
                    <button
                        class="w-8 h-8 flex items-center justify-center rounded-xl border border-[#e2e8f0] text-[#475569] hover:bg-[#f1f5f9] font-bold transition">5</button>
                    <span class="w-8 h-8 flex items-center justify-center text-slate-400 font-bold">...</span>
                    <button
                        class="w-8 h-8 flex items-center justify-center rounded-xl border border-[#e2e8f0] text-[#475569] hover:bg-[#f1f5f9] font-bold transition">25</button>
                    <button
                        class="w-8 h-8 flex items-center justify-center rounded-xl border border-[#e2e8f0] text-[#475569] hover:bg-[#f1f5f9] transition">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7">
                            </path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Referrals Tab Content -->
        <div x-show="activeTab === 'referrals'" style="display: none;">
            
            <div class="mb-4 flex justify-end">
                <a href="{{ url('/admin/referrals/create') }}" class="px-4 py-2.5 bg-[#b00000] text-white text-sm font-bold rounded-xl hover:bg-[#8a0000] transition flex items-center space-x-2 shadow-sm">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4"></path></svg>
                    <span>Add Referral</span>
                </a>
            </div>

            @if(session('success'))
            <div class="mb-6 p-4 rounded-xl bg-emerald-50 border border-emerald-200 text-emerald-700 text-sm font-bold flex items-center">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                {{ session('success') }}
            </div>
            @endif

            <!-- Filters -->
            <form method="GET" action="{{ url('/admin/claims') }}" class="mb-6 flex flex-col sm:flex-row gap-3">
                <input type="hidden" name="ref_page" value="1">
                <div class="flex-1">
                    <input type="text" name="search_ref" value="{{ request('search_ref') }}" placeholder="Search by code, email or referrer..." class="w-full px-4 py-2.5 rounded-xl border border-[#e2e8f0] focus:outline-none focus:ring-1 focus:ring-red-500 focus:border-red-500 text-sm font-medium text-[#0f172a]">
                </div>
                <select name="status_ref" onchange="this.form.submit()" class="px-4 py-2.5 rounded-xl border border-[#e2e8f0] focus:outline-none focus:ring-1 focus:ring-red-500 focus:border-red-500 text-sm font-medium text-slate-700 bg-white">
                    <option value="All" {{ request('status_ref') == 'All' ? 'selected' : '' }}>All Status</option>
                    <option value="Pending" {{ request('status_ref') == 'Pending' ? 'selected' : '' }}>Pending</option>
                    <option value="Completed" {{ request('status_ref') == 'Completed' ? 'selected' : '' }}>Completed</option>
                    <option value="Expired" {{ request('status_ref') == 'Expired' ? 'selected' : '' }}>Expired</option>
                </select>
                <button type="submit" class="px-5 py-2.5 bg-slate-800 text-white text-sm font-bold rounded-xl hover:bg-slate-900 transition">Search</button>
            </form>

            <div class="bg-white rounded-2xl border border-[#e2e8f0] shadow-sm overflow-hidden flex flex-col">
                <div class="overflow-x-auto w-full">
                    <table class="w-full text-left border-collapse min-w-[800px]">
                        <thead>
                            <tr class="bg-[#f1f5f9] border-b border-[#e2e8f0] text-xs font-bold text-[#475569] uppercase tracking-wider">
                                <th class="px-6 py-4">Code</th>
                                <th class="px-6 py-4">Referrer</th>
                                <th class="px-6 py-4">Referred Email</th>
                                <th class="px-6 py-4 text-center">Reward Coins</th>
                                <th class="px-6 py-4">Status</th>
                                <th class="px-6 py-4">Expires At</th>
                                <th class="px-6 py-4 text-right">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-100 text-sm">
                            @forelse($referrals as $referral)
                            <tr class="hover:bg-[#f1f5f9]/50 transition">
                                <td class="px-6 py-4 font-bold text-[#0f172a]">{{ $referral->code }}</td>
                                <td class="px-6 py-4 font-medium text-slate-700">{{ optional($referral->referrer)->name ?? 'N/A' }}</td>
                                <td class="px-6 py-4 text-slate-500">{{ $referral->referred_email ?? '—' }}</td>
                                <td class="px-6 py-4 text-center font-bold text-[#0f172a]">{{ $referral->reward_coins }}</td>
                                <td class="px-6 py-4">
                                    @if($referral->status === 'Completed')
                                        <span class="inline-block px-2.5 py-1 rounded-full text-[11px] font-bold bg-emerald-100 text-emerald-700 border border-emerald-200">Completed</span>
                                    @elseif($referral->status === 'Expired')
                                        <span class="inline-block px-2.5 py-1 rounded-full text-[11px] font-bold bg-red-100 text-[#8a0000] border border-red-200">Expired</span>
                                    @else
                                        <span class="inline-block px-2.5 py-1 rounded-full text-[11px] font-bold bg-yellow-100 text-yellow-700 border border-yellow-200">Pending</span>
                                    @endif
                                </td>
                                <td class="px-6 py-4 text-xs font-medium text-slate-500">{{ $referral->expires_at ? $referral->expires_at->format('d M Y') : '—' }}</td>
                                <td class="px-6 py-4 text-right">
                                    <a href="{{ route('referrals.edit', $referral->id) }}" class="text-blue-500 hover:text-blue-700 transition mr-3 inline-block bg-blue-50 p-1.5 rounded-lg border border-blue-100">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path></svg>
                                    </a>
                                    <form action="{{ route('referrals.destroy', $referral->id) }}" method="POST" class="inline-block">
                                        @csrf @method('DELETE')
                                        <button type="submit" class="text-[#EF4444] hover:text-[#8a0000] transition bg-red-50 p-1.5 rounded-lg border border-red-100" onclick="return confirm('Delete this referral?')">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="7" class="px-6 py-8 text-center text-[#475569]">
                                    No referrals found.
                                </td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
                <div class="px-6 py-4 border-t border-[#e2e8f0] bg-white">
                    {{ $referrals->appends(['search_ref' => request('search_ref'), 'status_ref' => request('status_ref')])->links() }}
                </div>
            </div>
        </div>

    </div>
@endsection



