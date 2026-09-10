@extends('layouts.admin')

@section('title', 'FAQ Editor')

@section('content')
<div class="flex-1 overflow-auto p-6 md:p-10">
    
    <div class="mb-8">
        <h1 class="text-2xl font-bold text-slate-900 mb-1">FAQ Editor</h1>
        <div class="text-xs text-slate-500 font-medium flex items-center space-x-1">
            <a href="/admin/dashboard" class="hover:text-red-600 transition">Home</a>
            <svg class="w-3 h-3 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"></path></svg>
            <a href="/admin/settings" class="hover:text-red-600 transition">Settings</a>
            <svg class="w-3 h-3 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"></path></svg>
            <span class="text-slate-800">FAQ Editor</span>
        </div>
    </div>

    <!-- Main Container -->
    <div class="bg-white rounded-2xl shadow-sm border border-slate-200 overflow-hidden flex flex-col">
        
        <!-- Controls Row -->
        <div class="p-5 border-b border-slate-200 flex flex-col lg:flex-row items-center justify-between gap-4">
            <div class="flex flex-col md:flex-row items-center gap-4 w-full lg:w-auto">
                <!-- Search -->
                <div class="relative w-full md:w-80">
                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                        <svg class="h-4 w-4 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                    </div>
                    <input type="text" class="block w-full pl-9 pr-3 py-2 border border-slate-200 rounded-lg leading-5 bg-white placeholder-slate-400 focus:outline-none focus:ring-1 focus:ring-red-500 focus:border-red-500 text-sm transition" placeholder="Search FAQ by question or keyword...">
                </div>
                
                <!-- Filters -->
                <select class="block w-full md:w-40 pl-3 pr-8 py-2 border border-slate-200 rounded-lg leading-5 bg-white text-slate-700 text-sm font-medium focus:outline-none focus:ring-1 focus:ring-red-500 focus:border-red-500 transition">
                    <option>All Categories</option>
                    <option>General</option>
                    <option>Merchant</option>
                    <option>Rewards</option>
                </select>
                <select class="block w-full md:w-40 pl-3 pr-8 py-2 border border-slate-200 rounded-lg leading-5 bg-white text-slate-700 text-sm font-medium focus:outline-none focus:ring-1 focus:ring-red-500 focus:border-red-500 transition">
                    <option>All Status</option>
                    <option>Published</option>
                    <option>Draft</option>
                </select>
            </div>

            <!-- Add FAQ Button -->
            <button class="flex items-center justify-center space-x-2 border border-transparent bg-red-50 text-red-600 px-4 py-2 rounded-lg text-sm font-bold hover:bg-red-100 transition w-full lg:w-auto shrink-0">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4"></path></svg>
                <span>Add FAQ</span>
            </button>
        </div>

        <!-- Table -->
        <div class="overflow-x-auto table-container">
            <table class="w-full text-left border-collapse whitespace-nowrap">
                <thead>
                    <tr class="bg-slate-50 border-b border-slate-200 text-[11px] uppercase tracking-wider font-bold text-slate-600">
                        <th class="px-5 py-4 w-12 text-center">#</th>
                        <th class="px-5 py-4 w-1/3">Question</th>
                        <th class="px-5 py-4">Category</th>
                        <th class="px-5 py-4">Status</th>
                        <th class="px-5 py-4 text-center">Order</th>
                        <th class="px-5 py-4">Last Updated</th>
                        <th class="px-5 py-4 text-center">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-100 text-sm font-medium text-slate-800">
                    <!-- Row 1 -->
                    <tr class="hover:bg-slate-50 transition">
                        <td class="px-5 py-4 text-center text-slate-500">1</td>
                        <td class="px-5 py-4 font-bold text-slate-700 whitespace-normal">What is BeAurex?</td>
                        <td class="px-5 py-4 text-slate-600">General</td>
                        <td class="px-5 py-4"><span class="inline-flex items-center px-2 py-0.5 rounded text-[11px] font-bold bg-emerald-100 text-emerald-700">Published</span></td>
                        <td class="px-5 py-4 text-center font-bold text-slate-700">1</td>
                        <td class="px-5 py-4 text-slate-600 text-xs">May 24, 2025 11:20 AM</td>
                        <td class="px-5 py-4 text-center">
                            <div class="flex justify-center space-x-2 text-slate-400">
                                <button class="hover:text-slate-600 transition"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path></svg></button>
                                <button class="hover:text-blue-600 transition"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path></svg></button>
                                <button class="hover:text-red-600 transition"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg></button>
                            </div>
                        </td>
                    </tr>
                    <!-- Row 2 -->
                    <tr class="hover:bg-slate-50 transition">
                        <td class="px-5 py-4 text-center text-slate-500">2</td>
                        <td class="px-5 py-4 font-bold text-slate-700 whitespace-normal">How does BeAurex work?</td>
                        <td class="px-5 py-4 text-slate-600">General</td>
                        <td class="px-5 py-4"><span class="inline-flex items-center px-2 py-0.5 rounded text-[11px] font-bold bg-emerald-100 text-emerald-700">Published</span></td>
                        <td class="px-5 py-4 text-center font-bold text-slate-700">2</td>
                        <td class="px-5 py-4 text-slate-600 text-xs">May 24, 2025 10:45 AM</td>
                        <td class="px-5 py-4 text-center">
                            <div class="flex justify-center space-x-2 text-slate-400">
                                <button class="hover:text-slate-600 transition"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path></svg></button>
                                <button class="hover:text-blue-600 transition"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path></svg></button>
                                <button class="hover:text-red-600 transition"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg></button>
                            </div>
                        </td>
                    </tr>
                    <!-- Row 3 -->
                    <tr class="hover:bg-slate-50 transition">
                        <td class="px-5 py-4 text-center text-slate-500">3</td>
                        <td class="px-5 py-4 font-bold text-slate-700 whitespace-normal">How can merchants join BeAurex?</td>
                        <td class="px-5 py-4 text-slate-600">Merchant</td>
                        <td class="px-5 py-4"><span class="inline-flex items-center px-2 py-0.5 rounded text-[11px] font-bold bg-emerald-100 text-emerald-700">Published</span></td>
                        <td class="px-5 py-4 text-center font-bold text-slate-700">1</td>
                        <td class="px-5 py-4 text-slate-600 text-xs">May 24, 2025 09:30 AM</td>
                        <td class="px-5 py-4 text-center">
                            <div class="flex justify-center space-x-2 text-slate-400">
                                <button class="hover:text-slate-600 transition"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path></svg></button>
                                <button class="hover:text-blue-600 transition"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path></svg></button>
                                <button class="hover:text-red-600 transition"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg></button>
                            </div>
                        </td>
                    </tr>
                    <!-- Row 4 -->
                    <tr class="hover:bg-slate-50 transition">
                        <td class="px-5 py-4 text-center text-slate-500">4</td>
                        <td class="px-5 py-4 font-bold text-slate-700 whitespace-normal">How do I create a loyalty program?</td>
                        <td class="px-5 py-4 text-slate-600">Merchant</td>
                        <td class="px-5 py-4"><span class="inline-flex items-center px-2 py-0.5 rounded text-[11px] font-bold bg-emerald-100 text-emerald-700">Published</span></td>
                        <td class="px-5 py-4 text-center font-bold text-slate-700">2</td>
                        <td class="px-5 py-4 text-slate-600 text-xs">May 24, 2025 09:15 AM</td>
                        <td class="px-5 py-4 text-center">
                            <div class="flex justify-center space-x-2 text-slate-400">
                                <button class="hover:text-slate-600 transition"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path></svg></button>
                                <button class="hover:text-blue-600 transition"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path></svg></button>
                                <button class="hover:text-red-600 transition"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg></button>
                            </div>
                        </td>
                    </tr>
                    <!-- Row 5 -->
                    <tr class="hover:bg-slate-50 transition">
                        <td class="px-5 py-4 text-center text-slate-500">5</td>
                        <td class="px-5 py-4 font-bold text-slate-700 whitespace-normal">How are points calculated?</td>
                        <td class="px-5 py-4 text-slate-600">Rewards</td>
                        <td class="px-5 py-4"><span class="inline-flex items-center px-2 py-0.5 rounded text-[11px] font-bold bg-emerald-100 text-emerald-700">Published</span></td>
                        <td class="px-5 py-4 text-center font-bold text-slate-700">1</td>
                        <td class="px-5 py-4 text-slate-600 text-xs">May 23, 2025 08:50 PM</td>
                        <td class="px-5 py-4 text-center">
                            <div class="flex justify-center space-x-2 text-slate-400">
                                <button class="hover:text-slate-600 transition"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path></svg></button>
                                <button class="hover:text-blue-600 transition"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path></svg></button>
                                <button class="hover:text-red-600 transition"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg></button>
                            </div>
                        </td>
                    </tr>
                    <!-- Row 6 -->
                    <tr class="hover:bg-slate-50 transition">
                        <td class="px-5 py-4 text-center text-slate-500">6</td>
                        <td class="px-5 py-4 font-bold text-slate-700 whitespace-normal">How can customers redeem rewards?</td>
                        <td class="px-5 py-4 text-slate-600">Rewards</td>
                        <td class="px-5 py-4"><span class="inline-flex items-center px-2 py-0.5 rounded text-[11px] font-bold bg-amber-100 text-amber-700">Draft</span></td>
                        <td class="px-5 py-4 text-center font-bold text-slate-700">2</td>
                        <td class="px-5 py-4 text-slate-600 text-xs">May 23, 2025 08:20 PM</td>
                        <td class="px-5 py-4 text-center">
                            <div class="flex justify-center space-x-2 text-slate-400">
                                <button class="hover:text-slate-600 transition"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path></svg></button>
                                <button class="hover:text-blue-600 transition"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path></svg></button>
                                <button class="hover:text-red-600 transition"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg></button>
                            </div>
                        </td>
                    </tr>
                    <!-- Row 7 -->
                    <tr class="hover:bg-slate-50 transition">
                        <td class="px-5 py-4 text-center text-slate-500">7</td>
                        <td class="px-5 py-4 font-bold text-slate-700 whitespace-normal">Is BeAurex free to use?</td>
                        <td class="px-5 py-4 text-slate-600">General</td>
                        <td class="px-5 py-4"><span class="inline-flex items-center px-2 py-0.5 rounded text-[11px] font-bold bg-emerald-100 text-emerald-700">Published</span></td>
                        <td class="px-5 py-4 text-center font-bold text-slate-700">3</td>
                        <td class="px-5 py-4 text-slate-600 text-xs">May 23, 2025 07:45 PM</td>
                        <td class="px-5 py-4 text-center">
                            <div class="flex justify-center space-x-2 text-slate-400">
                                <button class="hover:text-slate-600 transition"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path></svg></button>
                                <button class="hover:text-blue-600 transition"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path></svg></button>
                                <button class="hover:text-red-600 transition"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg></button>
                            </div>
                        </td>
                    </tr>
                    <!-- Row 8 -->
                    <tr class="hover:bg-slate-50 transition">
                        <td class="px-5 py-4 text-center text-slate-500">8</td>
                        <td class="px-5 py-4 font-bold text-slate-700 whitespace-normal">Can I integrate BeAurex with my POS?</td>
                        <td class="px-5 py-4 text-slate-600">Integration</td>
                        <td class="px-5 py-4"><span class="inline-flex items-center px-2 py-0.5 rounded text-[11px] font-bold bg-emerald-100 text-emerald-700">Published</span></td>
                        <td class="px-5 py-4 text-center font-bold text-slate-700">1</td>
                        <td class="px-5 py-4 text-slate-600 text-xs">May 23, 2025 07:10 PM</td>
                        <td class="px-5 py-4 text-center">
                            <div class="flex justify-center space-x-2 text-slate-400">
                                <button class="hover:text-slate-600 transition"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path></svg></button>
                                <button class="hover:text-blue-600 transition"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path></svg></button>
                                <button class="hover:text-red-600 transition"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg></button>
                            </div>
                        </td>
                    </tr>
                    <!-- Row 9 -->
                    <tr class="hover:bg-slate-50 transition">
                        <td class="px-5 py-4 text-center text-slate-500">9</td>
                        <td class="px-5 py-4 font-bold text-slate-700 whitespace-normal">What payment methods are supported?</td>
                        <td class="px-5 py-4 text-slate-600">General</td>
                        <td class="px-5 py-4"><span class="inline-flex items-center px-2 py-0.5 rounded text-[11px] font-bold bg-slate-100 text-slate-600">Unpublished</span></td>
                        <td class="px-5 py-4 text-center font-bold text-slate-700">4</td>
                        <td class="px-5 py-4 text-slate-600 text-xs">May 23, 2025 06:30 PM</td>
                        <td class="px-5 py-4 text-center">
                            <div class="flex justify-center space-x-2 text-slate-400">
                                <button class="hover:text-slate-600 transition"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path></svg></button>
                                <button class="hover:text-blue-600 transition"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path></svg></button>
                                <button class="hover:text-red-600 transition"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg></button>
                            </div>
                        </td>
                    </tr>
                    <!-- Row 10 -->
                    <tr class="hover:bg-slate-50 transition">
                        <td class="px-5 py-4 text-center text-slate-500">10</td>
                        <td class="px-5 py-4 font-bold text-slate-700 whitespace-normal">How do I contact support?</td>
                        <td class="px-5 py-4 text-slate-600">Support</td>
                        <td class="px-5 py-4"><span class="inline-flex items-center px-2 py-0.5 rounded text-[11px] font-bold bg-emerald-100 text-emerald-700">Published</span></td>
                        <td class="px-5 py-4 text-center font-bold text-slate-700">1</td>
                        <td class="px-5 py-4 text-slate-600 text-xs">May 23, 2025 05:50 PM</td>
                        <td class="px-5 py-4 text-center">
                            <div class="flex justify-center space-x-2 text-slate-400">
                                <button class="hover:text-slate-600 transition"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path></svg></button>
                                <button class="hover:text-blue-600 transition"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path></svg></button>
                                <button class="hover:text-red-600 transition"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg></button>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        
        <!-- Pagination Footer -->
        <div class="p-4 border-t border-slate-200 flex flex-col md:flex-row items-center justify-between gap-4 bg-white text-sm text-slate-500">
            <div class="font-medium">Showing 1 to 10 of 48 entries</div>
            <div class="flex items-center space-x-1">
                <button class="w-8 h-8 flex items-center justify-center rounded-lg border border-slate-200 text-slate-400 hover:bg-slate-50 transition" disabled>
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                </button>
                <button class="w-8 h-8 flex items-center justify-center rounded-lg bg-red-600 text-white font-bold shadow-sm">1</button>
                <button class="w-8 h-8 flex items-center justify-center rounded-lg border border-slate-200 text-slate-600 hover:bg-slate-50 font-bold transition">2</button>
                <button class="w-8 h-8 flex items-center justify-center rounded-lg border border-slate-200 text-slate-600 hover:bg-slate-50 font-bold transition">3</button>
                <button class="w-8 h-8 flex items-center justify-center rounded-lg border border-slate-200 text-slate-600 hover:bg-slate-50 font-bold transition">4</button>
                <button class="w-8 h-8 flex items-center justify-center rounded-lg border border-slate-200 text-slate-600 hover:bg-slate-50 font-bold transition">5</button>
                <span class="w-8 h-8 flex items-center justify-center text-slate-400 font-bold">...</span>
                <button class="w-8 h-8 flex items-center justify-center rounded-lg border border-slate-200 text-slate-600 hover:bg-slate-50 font-bold transition">5</button>
                <button class="w-8 h-8 flex items-center justify-center rounded-lg border border-slate-200 text-slate-600 hover:bg-slate-50 transition">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                </button>
            </div>
        </div>
    </div>
</div>
@endsection
