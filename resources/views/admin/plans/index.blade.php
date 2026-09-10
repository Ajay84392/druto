@extends('layouts.admin')

@section('title', 'Admin')

@section('content')
        <!-- Page Content -->
        <div class="flex-1 overflow-auto p-6 md:p-10">
            
            <!-- Page Header & Breadcrumbs -->
            <div class="mb-6">
                <h1 class="text-2xl font-bold text-slate-900 mb-1">Plan History</h1>
                <div class="text-xs text-slate-500 font-medium flex items-center space-x-1">
                    <a href="/admin/dashboard" class="hover:text-red-600 transition">Home</a>
                    <svg class="w-3 h-3 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"></path></svg>
                    <span class="text-slate-800">Plans</span>
                    <svg class="w-3 h-3 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"></path></svg>
                    <span class="text-slate-800">Plan History</span>
                </div>
            </div>

            <!-- Tabs -->
            <div class="flex space-x-2 mb-6 border-b border-slate-200">
                <a href="#" class="flex items-center space-x-2 px-4 py-2.5 text-sm font-semibold text-slate-500 hover:text-slate-700 hover:bg-slate-100 rounded-t-lg transition">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zm10 0a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zm10 0a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path></svg>
                    <span>Active Plans</span>
                </a>
                <a href="/admin/plans" class="flex items-center space-x-2 px-4 py-2.5 text-sm font-semibold text-red-600 border-b-2 border-red-600 bg-red-50/50 rounded-t-lg">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    <span>Plan History</span>
                </a>
                <a href="/admin/plans/create" class="flex items-center space-x-2 px-4 py-2.5 text-sm font-semibold text-slate-500 hover:text-slate-700 hover:bg-slate-100 rounded-t-lg transition">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4"></path></svg>
                    <span>Create Plan</span>
                </a>
            </div>

            <!-- Table Section -->
            <div class="bg-white rounded-2xl shadow-sm border border-slate-200 overflow-hidden flex flex-col">
                
                <!-- Controls Row -->
                <div class="p-5 border-b border-slate-200 flex flex-col xl:flex-row items-center gap-4 justify-between">
                    <div class="flex flex-col sm:flex-row items-center gap-4 w-full xl:w-auto">
                        <!-- Search -->
                        <div class="relative w-full sm:w-64">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <svg class="h-4 w-4 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                            </div>
                            <input type="text" class="block w-full pl-9 pr-3 py-2 border border-slate-200 rounded-lg leading-5 bg-white placeholder-slate-400 focus:outline-none focus:ring-1 focus:ring-red-500 focus:border-red-500 text-sm transition" placeholder="Search by plan name...">
                        </div>
                        
                        <!-- Filters -->
                        <select class="block w-full sm:w-auto pl-3 pr-8 py-2 border border-slate-200 rounded-lg leading-5 bg-white text-slate-700 text-sm font-medium focus:outline-none focus:ring-1 focus:ring-red-500 focus:border-red-500 transition">
                            <option>All Actions</option>
                            <option>Created</option>
                            <option>Updated</option>
                            <option>Deactivated</option>
                            <option>Deleted</option>
                        </select>
                        <select class="block w-full sm:w-auto pl-3 pr-8 py-2 border border-slate-200 rounded-lg leading-5 bg-white text-slate-700 text-sm font-medium focus:outline-none focus:ring-1 focus:ring-red-500 focus:border-red-500 transition">
                            <option>All Status</option>
                            <option>Active</option>
                            <option>Inactive</option>
                            <option>Deleted</option>
                        </select>

                        <!-- Date Range -->
                        <button class="flex items-center justify-between w-full sm:w-64 border border-slate-200 bg-white text-slate-700 px-4 py-2 rounded-lg text-sm font-medium hover:bg-slate-50 transition">
                            <span>May 01, 2025 - May 24, 2025</span>
                            <svg class="w-4 h-4 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                        </button>
                    </div>

                    <!-- Export Button -->
                    <button class="flex items-center justify-center space-x-2 border border-red-200 bg-red-50 text-red-600 px-4 py-2 rounded-lg text-sm font-bold hover:bg-red-100 transition w-full xl:w-auto shrink-0">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path></svg>
                        <span>Export</span>
                    </button>
                </div>

                <!-- Table -->
                <div class="overflow-x-auto">
                    <table class="w-full text-left border-collapse">
                        <thead>
                            <tr class="bg-slate-50 border-b border-slate-200 text-[11px] uppercase tracking-wider font-bold text-slate-600">
                                <th class="px-5 py-4 w-12 text-center">#</th>
                                <th class="px-5 py-4">Plan Name</th>
                                <th class="px-5 py-4">Action</th>
                                <th class="px-5 py-4">Status</th>
                                <th class="px-5 py-4">Performed By</th>
                                <th class="px-5 py-4">Date & Time</th>
                                <th class="px-5 py-4 text-center">Details</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-100 text-sm font-medium text-slate-800">
                            <!-- Row 1 -->
                            <tr class="hover:bg-slate-50 transition">
                                <td class="px-5 py-4 text-center text-slate-500">1</td>
                                <td class="px-5 py-4 font-semibold">Professional Plan</td>
                                <td class="px-5 py-4"><span class="inline-flex items-center px-2 py-0.5 rounded text-[11px] font-bold bg-emerald-100 text-emerald-700">Created</span></td>
                                <td class="px-5 py-4"><span class="text-emerald-600 font-bold">Active</span></td>
                                <td class="px-5 py-4 text-slate-600">Super Admin</td>
                                <td class="px-5 py-4 text-slate-600 text-xs">May 24, 2025, 11:20 AM</td>
                                <td class="px-5 py-4 text-center"><button class="text-slate-400 hover:text-red-600 transition"><svg class="w-5 h-5 inline" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path></svg></button></td>
                            </tr>
                            <!-- Row 2 -->
                            <tr class="hover:bg-slate-50 transition">
                                <td class="px-5 py-4 text-center text-slate-500">2</td>
                                <td class="px-5 py-4 font-semibold">Basic Plan</td>
                                <td class="px-5 py-4"><span class="inline-flex items-center px-2 py-0.5 rounded text-[11px] font-bold bg-blue-100 text-blue-700">Updated</span></td>
                                <td class="px-5 py-4"><span class="text-emerald-600 font-bold">Active</span></td>
                                <td class="px-5 py-4 text-slate-600">Super Admin</td>
                                <td class="px-5 py-4 text-slate-600 text-xs">May 24, 2025, 10:45 AM</td>
                                <td class="px-5 py-4 text-center"><a href="/admin/plans/edit/5" class="text-slate-400 hover:text-red-600 transition"><svg class="w-5 h-5 inline" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path></svg></a></td>
                            </tr>
                            <!-- Row 3 -->
                            <tr class="hover:bg-slate-50 transition">
                                <td class="px-5 py-4 text-center text-slate-500">3</td>
                                <td class="px-5 py-4 font-semibold">Enterprise Plan</td>
                                <td class="px-5 py-4"><span class="inline-flex items-center px-2 py-0.5 rounded text-[11px] font-bold bg-emerald-100 text-emerald-700">Created</span></td>
                                <td class="px-5 py-4"><span class="text-emerald-600 font-bold">Active</span></td>
                                <td class="px-5 py-4 text-slate-600">Super Admin</td>
                                <td class="px-5 py-4 text-slate-600 text-xs">May 23, 2025, 04:30 PM</td>
                                <td class="px-5 py-4 text-center"><button class="text-slate-400 hover:text-red-600 transition"><svg class="w-5 h-5 inline" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path></svg></button></td>
                            </tr>
                            <!-- Row 4 -->
                            <tr class="hover:bg-slate-50 transition">
                                <td class="px-5 py-4 text-center text-slate-500">4</td>
                                <td class="px-5 py-4 font-semibold">Basic Plan</td>
                                <td class="px-5 py-4"><span class="inline-flex items-center px-2 py-0.5 rounded text-[11px] font-bold bg-orange-100 text-orange-700">Deactivated</span></td>
                                <td class="px-5 py-4"><span class="text-slate-400 font-bold">Inactive</span></td>
                                <td class="px-5 py-4 text-slate-600">Super Admin</td>
                                <td class="px-5 py-4 text-slate-600 text-xs">May 23, 2025, 03:15 PM</td>
                                <td class="px-5 py-4 text-center"><button class="text-slate-400 hover:text-red-600 transition"><svg class="w-5 h-5 inline" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path></svg></button></td>
                            </tr>
                            <!-- Row 5 -->
                            <tr class="hover:bg-slate-50 transition">
                                <td class="px-5 py-4 text-center text-slate-500">5</td>
                                <td class="px-5 py-4 font-semibold">Professional Plan</td>
                                <td class="px-5 py-4"><span class="inline-flex items-center px-2 py-0.5 rounded text-[11px] font-bold bg-blue-100 text-blue-700">Updated</span></td>
                                <td class="px-5 py-4"><span class="text-emerald-600 font-bold">Active</span></td>
                                <td class="px-5 py-4 text-slate-600">Super Admin</td>
                                <td class="px-5 py-4 text-slate-600 text-xs">May 22, 2025, 02:10 PM</td>
                                <td class="px-5 py-4 text-center"><button class="text-slate-400 hover:text-red-600 transition"><svg class="w-5 h-5 inline" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path></svg></button></td>
                            </tr>
                            <!-- Row 6 -->
                            <tr class="hover:bg-slate-50 transition">
                                <td class="px-5 py-4 text-center text-slate-500">6</td>
                                <td class="px-5 py-4 font-semibold">Enterprise Plan</td>
                                <td class="px-5 py-4"><span class="inline-flex items-center px-2 py-0.5 rounded text-[11px] font-bold bg-blue-100 text-blue-700">Updated</span></td>
                                <td class="px-5 py-4"><span class="text-emerald-600 font-bold">Active</span></td>
                                <td class="px-5 py-4 text-slate-600">Super Admin</td>
                                <td class="px-5 py-4 text-slate-600 text-xs">May 21, 2025, 11:05 AM</td>
                                <td class="px-5 py-4 text-center"><button class="text-slate-400 hover:text-red-600 transition"><svg class="w-5 h-5 inline" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path></svg></button></td>
                            </tr>
                            <!-- Row 7 -->
                            <tr class="hover:bg-slate-50 transition">
                                <td class="px-5 py-4 text-center text-slate-500">7</td>
                                <td class="px-5 py-4 font-semibold">Premium Plan</td>
                                <td class="px-5 py-4"><span class="inline-flex items-center px-2 py-0.5 rounded text-[11px] font-bold bg-red-100 text-red-700">Deleted</span></td>
                                <td class="px-5 py-4"><span class="text-red-600 font-bold">Deleted</span></td>
                                <td class="px-5 py-4 text-slate-600">Super Admin</td>
                                <td class="px-5 py-4 text-slate-600 text-xs">May 20, 2025, 05:40 PM</td>
                                <td class="px-5 py-4 text-center"><button class="text-slate-400 hover:text-red-600 transition"><svg class="w-5 h-5 inline" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path></svg></button></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                
                <!-- Pagination Footer -->
                <div class="p-4 border-t border-slate-200 flex flex-col md:flex-row items-center justify-between gap-4 bg-white text-sm text-slate-500">
                    <div class="font-medium">Showing 1 to 10 of 45 entries</div>
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
                        <button class="w-8 h-8 flex items-center justify-center rounded-lg border border-slate-200 text-slate-600 hover:bg-slate-50 transition">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        </button>
                    </div>
                </div>
            </div>

        </div>
@endsection
