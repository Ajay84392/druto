@extends('layouts.admin')

@section('title', 'Admin')

@section('content')
        <!-- Page Content -->
        <div class="flex-1 overflow-auto p-6 md:p-10">
            
            <div class="mb-8">
                <h1 class="text-2xl font-bold text-slate-900 mb-1">Create Plan</h1>
                <div class="text-xs text-slate-500 font-medium flex items-center space-x-1">
                    <a href="/admin/dashboard" class="hover:text-red-600 transition">Home</a>
                    <svg class="w-3 h-3 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"></path></svg>
                    <a href="/admin/plans" class="hover:text-red-600 transition">Plans</a>
                    <svg class="w-3 h-3 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"></path></svg>
                    <span class="text-slate-800">Create Plan</span>
                </div>
            </div>

            <div class="flex flex-col lg:flex-row gap-8">
                <!-- Left Form -->
                <div class="flex-1 bg-white rounded-2xl shadow-sm border border-slate-200 p-6 md:p-8">
                    
                    <h2 class="text-lg font-bold text-slate-900 mb-6">Plan Information</h2>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
                        <div>
                            <label class="block text-xs font-bold text-slate-700 mb-1.5">Plan Name <span class="text-red-500">*</span></label>
                            <input type="text" class="w-full px-4 py-2.5 rounded-lg border border-slate-300 focus:outline-none focus:ring-1 focus:ring-red-500 focus:border-red-500 text-sm" placeholder="Enter plan name">
                        </div>
                        <div>
                            <label class="block text-xs font-bold text-slate-700 mb-1.5">Short Description</label>
                            <input type="text" class="w-full px-4 py-2.5 rounded-lg border border-slate-300 focus:outline-none focus:ring-1 focus:ring-red-500 focus:border-red-500 text-sm" placeholder="Enter short description">
                        </div>
                        <div>
                            <label class="block text-xs font-bold text-slate-700 mb-1.5">Price (₹) <span class="text-red-500">*</span></label>
                            <input type="number" class="w-full px-4 py-2.5 rounded-lg border border-slate-300 focus:outline-none focus:ring-1 focus:ring-red-500 focus:border-red-500 text-sm" placeholder="Enter plan price">
                        </div>
                        <div class="row-span-2">
                            <label class="block text-xs font-bold text-slate-700 mb-1.5">Detailed Description</label>
                            <textarea rows="4" class="w-full px-4 py-2.5 rounded-lg border border-slate-300 focus:outline-none focus:ring-1 focus:ring-red-500 focus:border-red-500 text-sm" placeholder="Enter detailed description"></textarea>
                            <div class="text-right text-[10px] text-slate-400 mt-1">0/500</div>
                        </div>
                        <div>
                            <label class="block text-xs font-bold text-slate-700 mb-1.5">Duration <span class="text-red-500">*</span></label>
                            <select class="w-full px-4 py-2.5 rounded-lg border border-slate-300 focus:outline-none focus:ring-1 focus:ring-red-500 focus:border-red-500 text-sm bg-white">
                                <option>Select duration</option>
                                <option>Monthly</option>
                                <option>Yearly</option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-xs font-bold text-slate-700 mb-1.5">Plan Type <span class="text-red-500">*</span></label>
                            <select class="w-full px-4 py-2.5 rounded-lg border border-slate-300 focus:outline-none focus:ring-1 focus:ring-red-500 focus:border-red-500 text-sm bg-white">
                                <option>Select plan type</option>
                                <option>Free</option>
                                <option>Paid</option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-xs font-bold text-slate-700 mb-1.5">Plan Status</label>
                            <select class="w-full px-4 py-2.5 rounded-lg border border-slate-300 focus:outline-none focus:ring-1 focus:ring-red-500 focus:border-red-500 text-sm bg-white">
                                <option>Active</option>
                                <option>Inactive</option>
                            </select>
                        </div>
                    </div>

                    <h2 class="text-lg font-bold text-slate-900 mb-2">Plan Features</h2>
                    <p class="text-xs text-slate-500 mb-4">Add features included in this plan</p>
                    
                    <div class="space-y-3 mb-6">
                        <div class="flex items-center space-x-3">
                            <div class="text-slate-300 cursor-move">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 8h16M4 16h16"></path></svg>
                            </div>
                            <input type="text" class="flex-1 px-4 py-2.5 rounded-lg border border-slate-300 focus:outline-none focus:ring-1 focus:ring-red-500 focus:border-red-500 text-sm" placeholder="Enter feature name">
                            <button class="text-red-400 hover:text-red-600 transition bg-red-50 p-2 rounded-lg border border-red-100">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
                            </button>
                        </div>
                        <div class="flex items-center space-x-3">
                            <div class="text-slate-300 cursor-move">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 8h16M4 16h16"></path></svg>
                            </div>
                            <input type="text" class="flex-1 px-4 py-2.5 rounded-lg border border-slate-300 focus:outline-none focus:ring-1 focus:ring-red-500 focus:border-red-500 text-sm" placeholder="Enter feature name">
                            <button class="text-red-400 hover:text-red-600 transition bg-red-50 p-2 rounded-lg border border-red-100">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
                            </button>
                        </div>
                        <div class="flex items-center space-x-3">
                            <div class="text-slate-300 cursor-move">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 8h16M4 16h16"></path></svg>
                            </div>
                            <input type="text" class="flex-1 px-4 py-2.5 rounded-lg border border-slate-300 focus:outline-none focus:ring-1 focus:ring-red-500 focus:border-red-500 text-sm" placeholder="Enter feature name">
                            <button class="text-red-400 hover:text-red-600 transition bg-red-50 p-2 rounded-lg border border-red-100">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
                            </button>
                        </div>
                    </div>
                    
                    <button class="flex items-center space-x-1 text-sm font-bold text-red-600 hover:text-red-700 transition">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4"></path></svg>
                        <span>Add Feature</span>
                    </button>
                </div>

                <!-- Right Preview -->
                <div class="w-full lg:w-80 flex-shrink-0">
                    <div class="bg-white rounded-2xl shadow-lg border border-purple-100 p-6 flex flex-col h-full sticky top-0 text-center">
                        <div class="text-xs font-bold uppercase tracking-widest text-slate-400 mb-6 bg-slate-50 py-1.5 rounded-full w-32 mx-auto border border-slate-100">Plan Preview</div>
                        
                        <div class="w-16 h-16 bg-purple-50 rounded-2xl flex items-center justify-center text-purple-600 mx-auto mb-4 border border-purple-100">
                            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
                        </div>
                        
                        <h3 class="text-xl font-bold text-slate-900 mb-2">Plan Name</h3>
                        <p class="text-xs text-slate-500 mb-6">Short description will appear here.</p>
                        
                        <div class="mb-6">
                            <span class="text-3xl font-black text-slate-900">₹ 0</span>
                            <span class="text-sm font-bold text-slate-400">/ duration</span>
                        </div>
                        
                        <div class="flex-1 space-y-3 text-left w-full mb-8">
                            <div class="flex items-start space-x-2">
                                <svg class="w-4 h-4 text-purple-500 mt-0.5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path></svg>
                                <span class="text-xs font-semibold text-slate-600">Feature will appear here</span>
                            </div>
                            <div class="flex items-start space-x-2">
                                <svg class="w-4 h-4 text-purple-500 mt-0.5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path></svg>
                                <span class="text-xs font-semibold text-slate-600">Feature will appear here</span>
                            </div>
                            <div class="flex items-start space-x-2">
                                <svg class="w-4 h-4 text-purple-500 mt-0.5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path></svg>
                                <span class="text-xs font-semibold text-slate-600">Feature will appear here</span>
                            </div>
                        </div>
                        
                        <div class="mt-auto">
                            <span class="inline-block px-4 py-1.5 bg-emerald-50 text-emerald-600 font-bold text-xs rounded-full border border-emerald-100">Active</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Action Buttons -->
            <div class="flex items-center justify-end space-x-4 mt-8 pb-4 border-t border-slate-200 pt-6">
                <button class="px-6 py-2.5 border border-slate-300 rounded-lg text-sm font-bold text-slate-700 hover:bg-slate-50 transition bg-white shadow-sm">Cancel</button>
                <button class="px-6 py-2.5 rounded-lg text-sm font-bold text-white bg-red-600 hover:bg-red-700 transition shadow-sm">Create Plan</button>
            </div>

        </div>
@endsection
