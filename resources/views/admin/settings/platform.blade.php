@extends('layouts.admin')

@section('title', 'Platform Management')

@section('content')
<div class="flex-1 overflow-auto p-6 md:p-10">
    
    <div class="mb-8">
        <h1 class="text-2xl font-bold text-slate-900 mb-1">Platform Management</h1>
        <div class="text-xs text-slate-500 font-medium flex items-center space-x-1">
            <a href="/admin/dashboard" class="hover:text-red-600 transition">Home</a>
            <svg class="w-3 h-3 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"></path></svg>
            <a href="/admin/settings" class="hover:text-red-600 transition">Settings</a>
            <svg class="w-3 h-3 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"></path></svg>
            <span class="text-slate-800">Platform Management</span>
        </div>
    </div>

    <div class="bg-white rounded-2xl shadow-sm border border-slate-200 p-6 md:p-8 max-w-4xl">
        <div class="mb-8 border-b border-slate-100 pb-4">
            <h2 class="text-lg font-bold text-slate-900">Platform Information</h2>
            <p class="text-sm text-slate-500">Update your platform details and general information.</p>
        </div>
        
        <div class="space-y-6">
            
            <div class="flex flex-col md:flex-row md:items-center gap-4 md:gap-8">
                <label class="w-full md:w-1/4 text-sm font-bold text-slate-700">Platform Name <span class="text-red-500">*</span></label>
                <div class="flex-1">
                    <input type="text" class="w-full px-4 py-2.5 rounded-lg border border-slate-300 focus:outline-none focus:ring-1 focus:ring-red-500 focus:border-red-500 text-sm font-semibold text-slate-900" value="BeAurex">
                </div>
            </div>

            <div class="flex flex-col md:flex-row gap-4 md:gap-8">
                <label class="w-full md:w-1/4 text-sm font-bold text-slate-700 pt-3">Platform Logo <span class="text-red-500">*</span></label>
                <div class="flex-1">
                    <div class="border border-slate-200 rounded-lg p-4 flex items-center justify-between bg-slate-50">
                        <div class="flex items-center space-x-4">
                            <div class="w-12 h-12 bg-white rounded border border-slate-200 flex items-center justify-center">
                                <svg class="w-8 h-8 text-red-600" fill="currentColor" viewBox="0 0 24 24"><path d="M4 4h4v4H4V4zm6 0h4v4h-4V4zm6 0h4v4h-4V4zM4 10h4v4H4v-4zm12 0h4v4h-4v-4zM4 16h4v4H4v-4zm6 0h4v4h-4v-4zm6 0h4v4h-4v-4zm-6-6h4v4h-4v-4z"/></svg>
                            </div>
                            <div>
                                <div class="font-bold text-slate-900 text-sm">beaurex-logo.png</div>
                                <div class="text-xs text-slate-500 mt-0.5">PNG • 120 KB</div>
                            </div>
                        </div>
                        <button class="px-4 py-1.5 border border-red-200 text-red-600 font-bold text-xs rounded hover:bg-red-50 transition">Change</button>
                    </div>
                </div>
            </div>

            <div class="flex flex-col md:flex-row md:items-center gap-4 md:gap-8">
                <label class="w-full md:w-1/4 text-sm font-bold text-slate-700">Platform Tagline <span class="text-red-500">*</span></label>
                <div class="flex-1">
                    <input type="text" class="w-full px-4 py-2.5 rounded-lg border border-slate-300 focus:outline-none focus:ring-1 focus:ring-red-500 focus:border-red-500 text-sm font-semibold text-slate-900" value="Smart Loyalty, Stronger Business Relationships">
                </div>
            </div>

            <div class="flex flex-col md:flex-row md:items-center gap-4 md:gap-8">
                <label class="w-full md:w-1/4 text-sm font-bold text-slate-700">Website URL <span class="text-red-500">*</span></label>
                <div class="flex-1">
                    <input type="url" class="w-full px-4 py-2.5 rounded-lg border border-slate-300 focus:outline-none focus:ring-1 focus:ring-red-500 focus:border-red-500 text-sm font-semibold text-slate-900" value="https://www.beaurex.com">
                </div>
            </div>

            <div class="flex flex-col md:flex-row md:items-center gap-4 md:gap-8">
                <label class="w-full md:w-1/4 text-sm font-bold text-slate-700">Company Name <span class="text-red-500">*</span></label>
                <div class="flex-1">
                    <input type="text" class="w-full px-4 py-2.5 rounded-lg border border-slate-300 focus:outline-none focus:ring-1 focus:ring-red-500 focus:border-red-500 text-sm font-semibold text-slate-900" value="BeAurex Technologies Private Limited">
                </div>
            </div>
            
            <div class="pt-6 border-t border-slate-100 flex justify-end">
                <button class="px-6 py-2.5 rounded-lg text-sm font-bold text-white bg-red-600 hover:bg-red-700 transition shadow-sm flex items-center space-x-2">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M8 7H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-3m-1 4l-3 3m0 0l-3-3m3 3V4"></path></svg>
                    <span>Update Platform Information</span>
                </button>
            </div>
            
        </div>
    </div>
</div>
@endsection
