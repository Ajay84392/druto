@extends('layouts.admin')

@section('title', 'Admin')

@section('content')
        <!-- Page Content -->
        <div class="flex-1 overflow-auto p-6 md:p-10">
            
            <div class="mb-8">
                <h1 class="text-2xl font-bold text-[#0f172a] mb-1">Edit Plan</h1>
                <div class="text-xs text-[#475569] font-medium flex items-center space-x-1">
                    <a href="/admin/dashboard" class="hover:text-[#b00000] transition">Home</a>
                    <svg class="w-3 h-3 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"></path></svg>
                    <a href="/admin/plans" class="hover:text-[#b00000] transition">Plans</a>
                    <svg class="w-3 h-3 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"></path></svg>
                    <span class="text-[#0f172a]">Edit Plan</span>
                </div>
            </div>

            <div class="flex flex-col lg:flex-row gap-8">
                <!-- Left Form -->
                <div class="flex-1 bg-white rounded-2xl shadow-sm border border-[#e2e8f0] p-6 md:p-8">
                    
                    <h2 class="text-lg font-bold text-[#0f172a] mb-6">Plan Information</h2>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
                        <div>
                            <label class="block text-xs font-bold text-slate-700 mb-1.5">Plan Name <span class="text-[#EF4444]">*</span></label>
                            <input type="text" class="w-full px-4 py-2.5 rounded-xl border border-[#e2e8f0] focus:outline-none focus:ring-1 focus:ring-red-500 focus:border-red-500 text-sm font-semibold text-[#0f172a]" value="Professional Plan">
                        </div>
                        <div>
                            <label class="block text-xs font-bold text-slate-700 mb-1.5">Short Description</label>
                            <input type="text" class="w-full px-4 py-2.5 rounded-xl border border-[#e2e8f0] focus:outline-none focus:ring-1 focus:ring-red-500 focus:border-red-500 text-sm font-semibold text-[#0f172a]" value="Advanced features for growing businesses.">
                            <div class="text-right text-[10px] text-slate-400 mt-1">40/150</div>
                        </div>
                        <div>
                            <label class="block text-xs font-bold text-slate-700 mb-1.5">Price (₹) <span class="text-[#EF4444]">*</span></label>
                            <input type="number" class="w-full px-4 py-2.5 rounded-xl border border-[#e2e8f0] focus:outline-none focus:ring-1 focus:ring-red-500 focus:border-red-500 text-sm font-semibold text-[#0f172a]" value="1499">
                        </div>
                        <div class="row-span-2">
                            <label class="block text-xs font-bold text-slate-700 mb-1.5">Detailed Description</label>
                            <textarea rows="4" class="w-full px-4 py-2.5 rounded-xl border border-[#e2e8f0] focus:outline-none focus:ring-1 focus:ring-red-500 focus:border-red-500 text-sm font-semibold text-[#0f172a]">Professional plan is designed for businesses that want to build stronger customer relationships and grow faster with advanced loyalty and reward features.</textarea>
                            <div class="text-right text-[10px] text-slate-400 mt-1">152/500</div>
                        </div>
                        <div>
                            <label class="block text-xs font-bold text-slate-700 mb-1.5">Duration <span class="text-[#EF4444]">*</span></label>
                            <select class="w-full px-4 py-2.5 rounded-xl border border-[#e2e8f0] focus:outline-none focus:ring-1 focus:ring-red-500 focus:border-red-500 text-sm bg-white font-semibold text-[#0f172a]">
                                <option>Monthly</option>
                                <option selected>1 Year</option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-xs font-bold text-slate-700 mb-1.5">Plan Type <span class="text-[#EF4444]">*</span></label>
                            <select class="w-full px-4 py-2.5 rounded-xl border border-[#e2e8f0] focus:outline-none focus:ring-1 focus:ring-red-500 focus:border-red-500 text-sm bg-white font-semibold text-[#0f172a]">
                                <option>Free</option>
                                <option selected>Paid</option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-xs font-bold text-slate-700 mb-1.5">Plan Status</label>
                            <select class="w-full px-4 py-2.5 rounded-xl border border-[#e2e8f0] focus:outline-none focus:ring-1 focus:ring-red-500 focus:border-red-500 text-sm bg-white font-semibold text-[#0f172a]">
                                <option selected>Active</option>
                                <option>Inactive</option>
                            </select>
                        </div>
                    </div>

                    <h2 class="text-lg font-bold text-[#0f172a] mb-2">Plan Features</h2>
                    <p class="text-xs text-[#475569] mb-4">Manage features included in this plan</p>
                    
                    <div class="space-y-3 mb-6">
                        <div class="flex items-center space-x-3">
                            <div class="text-slate-300 cursor-move">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 8h16M4 16h16"></path></svg>
                            </div>
                            <input type="text" class="flex-1 px-4 py-2.5 rounded-xl border border-[#e2e8f0] focus:outline-none focus:ring-1 focus:ring-red-500 focus:border-red-500 text-sm font-semibold text-slate-700" value="Up to 5 Branches">
                            <button class="text-red-400 hover:text-[#b00000] transition bg-red-50 p-2 rounded-xl border border-red-100">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
                            </button>
                        </div>
                        <div class="flex items-center space-x-3">
                            <div class="text-slate-300 cursor-move">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 8h16M4 16h16"></path></svg>
                            </div>
                            <input type="text" class="flex-1 px-4 py-2.5 rounded-xl border border-[#e2e8f0] focus:outline-none focus:ring-1 focus:ring-red-500 focus:border-red-500 text-sm font-semibold text-slate-700" value="QR Code Generation">
                            <button class="text-red-400 hover:text-[#b00000] transition bg-red-50 p-2 rounded-xl border border-red-100">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
                            </button>
                        </div>
                        <div class="flex items-center space-x-3">
                            <div class="text-slate-300 cursor-move">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 8h16M4 16h16"></path></svg>
                            </div>
                            <input type="text" class="flex-1 px-4 py-2.5 rounded-xl border border-[#e2e8f0] focus:outline-none focus:ring-1 focus:ring-red-500 focus:border-red-500 text-sm font-semibold text-slate-700" value="Reward & Points System">
                            <button class="text-red-400 hover:text-[#b00000] transition bg-red-50 p-2 rounded-xl border border-red-100">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
                            </button>
                        </div>
                        <div class="flex items-center space-x-3">
                            <div class="text-slate-300 cursor-move">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 8h16M4 16h16"></path></svg>
                            </div>
                            <input type="text" class="flex-1 px-4 py-2.5 rounded-xl border border-[#e2e8f0] focus:outline-none focus:ring-1 focus:ring-red-500 focus:border-red-500 text-sm font-semibold text-slate-700" value="Advanced Analytics">
                            <button class="text-red-400 hover:text-[#b00000] transition bg-red-50 p-2 rounded-xl border border-red-100">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
                            </button>
                        </div>
                        <div class="flex items-center space-x-3">
                            <div class="text-slate-300 cursor-move">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 8h16M4 16h16"></path></svg>
                            </div>
                            <input type="text" class="flex-1 px-4 py-2.5 rounded-xl border border-[#e2e8f0] focus:outline-none focus:ring-1 focus:ring-red-500 focus:border-red-500 text-sm font-semibold text-slate-700" value="Priority Support">
                            <button class="text-red-400 hover:text-[#b00000] transition bg-red-50 p-2 rounded-xl border border-red-100">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
                            </button>
                        </div>
                        <div class="flex items-center space-x-3">
                            <div class="text-slate-300 cursor-move">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 8h16M4 16h16"></path></svg>
                            </div>
                            <input type="text" class="flex-1 px-4 py-2.5 rounded-xl border border-[#e2e8f0] focus:outline-none focus:ring-1 focus:ring-red-500 focus:border-red-500 text-sm font-semibold text-slate-700" value="Custom Branding">
                            <button class="text-red-400 hover:text-[#b00000] transition bg-red-50 p-2 rounded-xl border border-red-100">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
                            </button>
                        </div>
                    </div>
                    
                    <button class="flex items-center space-x-1 text-sm font-bold text-[#b00000] hover:text-[#8a0000] transition">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4"></path></svg>
                        <span>Add Feature</span>
                    </button>
                </div>

                <!-- Right Preview -->
                <div class="w-full lg:w-80 flex-shrink-0">
                    <div class="bg-white rounded-2xl shadow-lg border border-purple-100 p-6 flex flex-col h-full sticky top-0 text-center">
                        <div class="text-xs font-bold uppercase tracking-widest text-slate-400 mb-6 bg-[#f1f5f9] py-1.5 rounded-full w-32 mx-auto border border-slate-100">Plan Preview</div>
                        
                        <div class="w-16 h-16 bg-purple-50 rounded-2xl flex items-center justify-center text-purple-600 mx-auto mb-4 border border-purple-100">
                            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
                        </div>
                        
                        <h3 class="text-xl font-bold text-[#0f172a] mb-2">Professional Plan</h3>
                        <p class="text-xs text-[#475569] mb-6 font-medium px-2">Advanced features for growing businesses.</p>
                        
                        <div class="mb-6">
                            <span class="text-3xl font-black text-orange-500">₹ 1,499</span>
                            <span class="text-sm font-bold text-orange-400">/ year</span>
                        </div>
                        
                        <div class="flex-1 space-y-3 text-left w-full mb-8">
                            <div class="flex items-start space-x-2">
                                <svg class="w-4 h-4 text-purple-500 mt-0.5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path></svg>
                                <span class="text-xs font-semibold text-[#475569]">Up to 5 Branches</span>
                            </div>
                            <div class="flex items-start space-x-2">
                                <svg class="w-4 h-4 text-purple-500 mt-0.5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path></svg>
                                <span class="text-xs font-semibold text-[#475569]">QR Code Generation</span>
                            </div>
                            <div class="flex items-start space-x-2">
                                <svg class="w-4 h-4 text-purple-500 mt-0.5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path></svg>
                                <span class="text-xs font-semibold text-[#475569]">Reward & Points System</span>
                            </div>
                            <div class="flex items-start space-x-2">
                                <svg class="w-4 h-4 text-purple-500 mt-0.5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path></svg>
                                <span class="text-xs font-semibold text-[#475569]">Advanced Analytics</span>
                            </div>
                            <div class="flex items-start space-x-2">
                                <svg class="w-4 h-4 text-purple-500 mt-0.5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path></svg>
                                <span class="text-xs font-semibold text-[#475569]">Priority Support</span>
                            </div>
                            <div class="flex items-start space-x-2">
                                <svg class="w-4 h-4 text-purple-500 mt-0.5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path></svg>
                                <span class="text-xs font-semibold text-[#475569]">Custom Branding</span>
                            </div>
                        </div>
                        
                        <div class="mt-auto">
                            <span class="inline-block px-4 py-1.5 bg-emerald-50 text-[#22C55E] font-bold text-xs rounded-full border border-emerald-100">Active</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Action Buttons -->
            <div class="flex items-center justify-end space-x-4 mt-8 pb-4 border-t border-[#e2e8f0] pt-6">
                <button class="px-6 py-2.5 border border-[#e2e8f0] rounded-xl text-sm font-bold text-slate-700 hover:bg-[#f1f5f9] transition bg-white shadow-sm">Cancel</button>
                <button class="px-6 py-2.5 rounded-xl text-sm font-bold text-white bg-[#b00000] hover:bg-[#8a0000] transition shadow-sm">Update Plan</button>
            </div>

        </div>
@endsection




