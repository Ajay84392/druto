@extends('layouts.admin')

@section('title', 'Brand Management')

@section('content')
<div class="flex-1 overflow-auto p-6 md:p-10">
    
    <div class="mb-8">
        <h1 class="text-2xl font-bold text-slate-900 mb-1">Brand Management</h1>
        <div class="text-xs text-slate-500 font-medium flex items-center space-x-1">
            <a href="/admin/dashboard" class="hover:text-red-600 transition">Home</a>
            <svg class="w-3 h-3 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"></path></svg>
            <a href="/admin/settings" class="hover:text-red-600 transition">Settings</a>
            <svg class="w-3 h-3 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"></path></svg>
            <span class="text-slate-800">Brand Management</span>
        </div>
    </div>

    <div class="flex flex-col lg:flex-row gap-8">
        
        <!-- Form -->
        <div class="flex-1 bg-white rounded-2xl shadow-sm border border-slate-200 p-6 md:p-8">
            <div class="mb-8 border-b border-slate-100 pb-4">
                <h2 class="text-lg font-bold text-slate-900">Brand Information</h2>
                <p class="text-sm text-slate-500">Manage your brand identity, logo, favicon and theme colors.</p>
            </div>
            
            <div class="space-y-6">
                
                <div class="flex flex-col md:flex-row md:items-center gap-4 md:gap-6">
                    <label class="w-full md:w-1/3 text-sm font-bold text-slate-700">Brand Name <span class="text-red-500">*</span></label>
                    <div class="flex-1">
                        <input type="text" class="w-full px-4 py-2.5 rounded-lg border border-slate-300 focus:outline-none focus:ring-1 focus:ring-red-500 focus:border-red-500 text-sm font-semibold text-slate-900" value="BeAurex">
                    </div>
                </div>

                <div class="flex flex-col md:flex-row gap-4 md:gap-6">
                    <label class="w-full md:w-1/3 text-sm font-bold text-slate-700 pt-3">Logo <span class="text-red-500">*</span></label>
                    <div class="flex-1">
                        <div class="border border-slate-200 rounded-lg p-3 flex items-center justify-between bg-slate-50">
                            <div class="flex items-center space-x-3">
                                <div class="w-10 h-10 bg-white rounded border border-slate-200 flex items-center justify-center">
                                    <svg class="w-6 h-6 text-red-600" fill="currentColor" viewBox="0 0 24 24"><path d="M4 4h4v4H4V4zm6 0h4v4h-4V4zm6 0h4v4h-4V4zM4 10h4v4H4v-4zm12 0h4v4h-4v-4zM4 16h4v4H4v-4zm6 0h4v4h-4v-4zm6 0h4v4h-4v-4zm-6-6h4v4h-4v-4z"/></svg>
                                </div>
                                <div>
                                    <div class="font-bold text-slate-900 text-xs">beaurex-logo.png</div>
                                    <div class="text-[10px] text-slate-500 mt-0.5">PNG • 120 KB</div>
                                </div>
                            </div>
                            <button class="px-3 py-1 border border-red-200 text-red-600 font-bold text-xs rounded hover:bg-red-50 transition">Change</button>
                        </div>
                    </div>
                </div>

                <div class="flex flex-col md:flex-row gap-4 md:gap-6">
                    <label class="w-full md:w-1/3 text-sm font-bold text-slate-700 pt-3">Favicon <span class="text-red-500">*</span></label>
                    <div class="flex-1">
                        <div class="border border-slate-200 rounded-lg p-3 flex items-center justify-between bg-slate-50">
                            <div class="flex items-center space-x-3">
                                <div class="w-10 h-10 bg-red-600 rounded border border-slate-200 flex items-center justify-center text-white font-black text-sm">LQ</div>
                                <div>
                                    <div class="font-bold text-slate-900 text-xs">favicon.ico</div>
                                    <div class="text-[10px] text-slate-500 mt-0.5">ICO • 16 KB</div>
                                </div>
                            </div>
                            <button class="px-3 py-1 border border-red-200 text-red-600 font-bold text-xs rounded hover:bg-red-50 transition">Change</button>
                        </div>
                    </div>
                </div>

                <div class="flex flex-col md:flex-row md:items-center gap-4 md:gap-6">
                    <label class="w-full md:w-1/3 text-sm font-bold text-slate-700">Primary Color <span class="text-red-500">*</span></label>
                    <div class="flex-1">
                        <div class="flex items-center space-x-3">
                            <div class="w-10 h-10 rounded border border-slate-200 shadow-inner" style="background-color: #D60000;"></div>
                            <input type="text" class="w-full px-4 py-2.5 rounded-lg border border-slate-300 focus:outline-none focus:ring-1 focus:ring-red-500 focus:border-red-500 text-sm font-semibold text-slate-900" value="#D60000">
                        </div>
                        <p class="text-[10px] text-slate-500 mt-2">This color will be used as primary brand color across the platform.</p>
                    </div>
                </div>

                <div class="flex flex-col md:flex-row md:items-center gap-4 md:gap-6">
                    <label class="w-full md:w-1/3 text-sm font-bold text-slate-700">Secondary Color <span class="text-red-500">*</span></label>
                    <div class="flex-1">
                        <div class="flex items-center space-x-3">
                            <div class="w-10 h-10 rounded border border-slate-200 shadow-inner" style="background-color: #FFFFFF;"></div>
                            <input type="text" class="w-full px-4 py-2.5 rounded-lg border border-slate-300 focus:outline-none focus:ring-1 focus:ring-red-500 focus:border-red-500 text-sm font-semibold text-slate-900" value="#FFFFFF">
                        </div>
                        <p class="text-[10px] text-slate-500 mt-2">This color will be used as secondary brand color across the platform.</p>
                    </div>
                </div>
                
            </div>
            
            <div class="mt-8 flex justify-end space-x-3 border-t border-slate-100 pt-6">
                <button class="px-6 py-2.5 border border-slate-300 rounded-lg text-sm font-bold text-slate-700 hover:bg-slate-50 transition bg-white shadow-sm">Cancel</button>
                <button class="px-6 py-2.5 rounded-lg text-sm font-bold text-white bg-red-600 hover:bg-red-700 transition shadow-sm flex items-center space-x-2">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M8 7H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-3m-1 4l-3 3m0 0l-3-3m3 3V4"></path></svg>
                    <span>Save Changes</span>
                </button>
            </div>
            
        </div>
        
        <!-- Preview -->
        <div class="w-full lg:w-80 flex-shrink-0">
            <div class="bg-white rounded-2xl shadow-sm border border-slate-200 p-6 flex flex-col sticky top-0 text-center">
                <div class="text-xs font-bold uppercase tracking-widest text-slate-400 mb-6 bg-slate-50 py-1.5 rounded-full w-32 mx-auto border border-slate-100">Brand Preview</div>
                <p class="text-xs text-slate-500 mb-6 px-4">This is how your brand will appear across the platform.</p>
                
                <div class="border border-slate-200 rounded-xl p-6 bg-slate-50 relative overflow-hidden mb-6 text-center">
                    <div class="flex items-center justify-center space-x-2 mb-6">
                        <svg class="w-6 h-6 text-[#D60000]" fill="currentColor" viewBox="0 0 24 24"><path d="M4 4h4v4H4V4zm6 0h4v4h-4V4zm6 0h4v4h-4V4zM4 10h4v4H4v-4zm12 0h4v4h-4v-4zM4 16h4v4H4v-4zm6 0h4v4h-4v-4zm6 0h4v4h-4v-4zm-6-6h4v4h-4v-4z"/></svg>
                        <span class="font-black text-lg text-slate-900">BeAurex</span>
                    </div>
                    
                    <h4 class="font-bold text-slate-900 mb-1">BeAurex</h4>
                    <p class="text-[10px] text-slate-500 mb-6">Rewards Made Simple</p>
                    
                    <button class="w-full py-2.5 rounded-lg text-xs font-bold text-white shadow-sm" style="background-color: #D60000;">Primary Button</button>
                </div>
                
                <div class="text-left bg-slate-50 p-4 rounded-xl border border-slate-100">
                    <h5 class="text-xs font-bold text-slate-900 mb-1">Sample Card</h5>
                    <p class="text-[10px] text-slate-500">This is a sample card preview with your brand colors.</p>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
