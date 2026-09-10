@extends('layouts.admin')

@section('title', 'Contact Management')

@section('content')
<div class="flex-1 overflow-auto p-6 md:p-10">
    
    <div class="mb-8">
        <h1 class="text-2xl font-bold text-slate-900 mb-1">Contact Management</h1>
        <div class="text-xs text-slate-500 font-medium flex items-center space-x-1">
            <a href="/admin/dashboard" class="hover:text-red-600 transition">Home</a>
            <svg class="w-3 h-3 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"></path></svg>
            <a href="/admin/settings" class="hover:text-red-600 transition">Settings</a>
            <svg class="w-3 h-3 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"></path></svg>
            <span class="text-slate-800">Contact Management</span>
        </div>
    </div>

    <div class="bg-white rounded-2xl shadow-sm border border-slate-200 p-6 md:p-8 max-w-4xl">
        <div class="mb-8 border-b border-slate-100 pb-4">
            <h2 class="text-lg font-bold text-slate-900">Contact Information</h2>
            <p class="text-sm text-slate-500">Update your support contact details and business address.</p>
        </div>
        
        <div class="space-y-6">
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Support Email -->
                <div class="md:col-span-2">
                    <label class="block text-sm font-bold text-slate-700 mb-2">Support Email <span class="text-red-500">*</span></label>
                    <input type="email" class="w-full md:w-1/2 px-4 py-2.5 rounded-lg border border-slate-300 focus:outline-none focus:ring-1 focus:ring-red-500 focus:border-red-500 text-sm font-semibold text-slate-900" value="support@beaurex.com">
                </div>
                
                <!-- Row 2 -->
                <div>
                    <label class="block text-sm font-bold text-slate-700 mb-2">Support Phone <span class="text-red-500">*</span></label>
                    <input type="text" class="w-full px-4 py-2.5 rounded-lg border border-slate-300 focus:outline-none focus:ring-1 focus:ring-red-500 focus:border-red-500 text-sm font-semibold text-slate-900" value="+91 98765 43210">
                </div>
                <div>
                    <label class="block text-sm font-bold text-slate-700 mb-2">State <span class="text-red-500">*</span></label>
                    <input type="text" class="w-full px-4 py-2.5 rounded-lg border border-slate-300 focus:outline-none focus:ring-1 focus:ring-red-500 focus:border-red-500 text-sm font-semibold text-slate-900" value="Karnataka">
                </div>
                
                <!-- Row 3 -->
                <div>
                    <label class="block text-sm font-bold text-slate-700 mb-2">Alternate Phone</label>
                    <input type="text" class="w-full px-4 py-2.5 rounded-lg border border-slate-300 focus:outline-none focus:ring-1 focus:ring-red-500 focus:border-red-500 text-sm font-semibold text-slate-900" value="+91 91234 56789">
                </div>
                <div>
                    <label class="block text-sm font-bold text-slate-700 mb-2">Country <span class="text-red-500">*</span></label>
                    <select class="w-full px-4 py-2.5 rounded-lg border border-slate-300 focus:outline-none focus:ring-1 focus:ring-red-500 focus:border-red-500 text-sm font-semibold text-slate-900 bg-white">
                        <option>India</option>
                        <option>United States</option>
                        <option>United Kingdom</option>
                    </select>
                </div>
                
                <!-- Row 4 -->
                <div>
                    <label class="block text-sm font-bold text-slate-700 mb-2">Address <span class="text-red-500">*</span></label>
                    <input type="text" class="w-full px-4 py-2.5 rounded-lg border border-slate-300 focus:outline-none focus:ring-1 focus:ring-red-500 focus:border-red-500 text-sm font-semibold text-slate-900" value="12, Business Park, 3rd Floor">
                </div>
                <div>
                    <label class="block text-sm font-bold text-slate-700 mb-2">Postal Code <span class="text-red-500">*</span></label>
                    <input type="text" class="w-full px-4 py-2.5 rounded-lg border border-slate-300 focus:outline-none focus:ring-1 focus:ring-red-500 focus:border-red-500 text-sm font-semibold text-slate-900" value="560038">
                </div>
                
                <!-- Row 5 -->
                <div>
                    <label class="block text-sm font-bold text-slate-700 mb-2">City <span class="text-red-500">*</span></label>
                    <input type="text" class="w-full px-4 py-2.5 rounded-lg border border-slate-300 focus:outline-none focus:ring-1 focus:ring-red-500 focus:border-red-500 text-sm font-semibold text-slate-900" value="Bangalore">
                </div>
            </div>
            
            <div class="pt-6 border-t border-slate-100 flex justify-end">
                <button class="px-6 py-2.5 rounded-lg text-sm font-bold text-white bg-red-600 hover:bg-red-700 transition shadow-sm flex items-center space-x-2">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M8 7H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-3m-1 4l-3 3m0 0l-3-3m3 3V4"></path></svg>
                    <span>Update Contact Information</span>
                </button>
            </div>
            
        </div>
    </div>
</div>
@endsection
