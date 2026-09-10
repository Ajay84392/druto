@extends('layouts.admin')

@section('title', 'Profile')

@section('content')
<div class="flex-1 overflow-auto p-6 md:p-10">
    
    <!-- Page Header & Breadcrumbs -->
    <div class="mb-8">
        <h1 class="text-2xl font-bold text-slate-900 mb-1">My Profile</h1>
        <div class="text-xs text-slate-500 font-medium flex items-center space-x-1">
            <a href="/admin/dashboard" class="hover:text-red-600 transition">Home</a>
            <svg class="w-3 h-3 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"></path></svg>
            <span class="text-slate-800">Profile</span>
        </div>
    </div>

    <div class="flex flex-col lg:flex-row gap-8">
        
        <!-- Left Side: Profile Info Card -->
        <div class="w-full lg:w-1/3">
            <div class="bg-white rounded-2xl shadow-sm border border-slate-200 overflow-hidden">
                <div class="h-32 bg-gradient-to-r from-red-600 to-red-800"></div>
                <div class="px-6 pb-6 text-center -mt-16">
                    <img src="https://ui-avatars.com/api/?name=Super+Admin&background=0D8ABC&color=fff&size=128" alt="Super Admin" class="w-32 h-32 rounded-full mx-auto border-4 border-white shadow-sm mb-4 object-cover">
                    <h2 class="text-xl font-bold text-slate-900">Super Admin</h2>
                    <p class="text-sm font-semibold text-red-600 mb-6">System Owner</p>
                    
                    <button class="w-full px-4 py-2 bg-slate-50 border border-slate-200 text-slate-700 font-bold text-sm rounded-lg hover:bg-slate-100 transition shadow-sm mb-2">Change Photo</button>
                    <button class="w-full px-4 py-2 bg-white text-red-600 font-bold text-sm rounded-lg hover:bg-red-50 transition">Remove Photo</button>
                </div>
                
                <div class="px-6 py-4 border-t border-slate-100">
                    <div class="flex items-center justify-between mb-2">
                        <span class="text-xs font-bold text-slate-500 uppercase tracking-wider">Account Status</span>
                        <span class="inline-flex items-center px-2 py-0.5 rounded text-[11px] font-bold bg-emerald-100 text-emerald-700">Active</span>
                    </div>
                    <div class="flex items-center justify-between">
                        <span class="text-xs font-bold text-slate-500 uppercase tracking-wider">Member Since</span>
                        <span class="text-sm font-semibold text-slate-800">Jan 2025</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Right Side: Forms -->
        <div class="flex-1 space-y-8">
            
            <!-- Basic Information -->
            <div class="bg-white rounded-2xl shadow-sm border border-slate-200 p-6 md:p-8">
                <h3 class="text-lg font-bold text-slate-900 mb-6">Basic Information</h3>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-xs font-bold text-slate-700 mb-1.5">First Name</label>
                        <input type="text" class="w-full px-4 py-2.5 rounded-lg border border-slate-300 focus:outline-none focus:ring-1 focus:ring-red-500 focus:border-red-500 text-sm font-semibold text-slate-900" value="Super">
                    </div>
                    <div>
                        <label class="block text-xs font-bold text-slate-700 mb-1.5">Last Name</label>
                        <input type="text" class="w-full px-4 py-2.5 rounded-lg border border-slate-300 focus:outline-none focus:ring-1 focus:ring-red-500 focus:border-red-500 text-sm font-semibold text-slate-900" value="Admin">
                    </div>
                    <div>
                        <label class="block text-xs font-bold text-slate-700 mb-1.5">Email Address</label>
                        <input type="email" class="w-full px-4 py-2.5 rounded-lg border border-slate-300 focus:outline-none focus:ring-1 focus:ring-red-500 focus:border-red-500 text-sm font-semibold text-slate-900" value="admin@beaurex.com">
                    </div>
                    <div>
                        <label class="block text-xs font-bold text-slate-700 mb-1.5">Phone Number</label>
                        <input type="tel" class="w-full px-4 py-2.5 rounded-lg border border-slate-300 focus:outline-none focus:ring-1 focus:ring-red-500 focus:border-red-500 text-sm font-semibold text-slate-900" value="+91 98765 43210">
                    </div>
                </div>
                
                <div class="mt-6 flex justify-end">
                    <button class="px-6 py-2.5 rounded-lg text-sm font-bold text-white bg-red-600 hover:bg-red-700 transition shadow-sm">Save Changes</button>
                </div>
            </div>

            <!-- Security / Password -->
            <div class="bg-white rounded-2xl shadow-sm border border-slate-200 p-6 md:p-8">
                <h3 class="text-lg font-bold text-slate-900 mb-6">Security Settings</h3>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="md:col-span-2">
                        <label class="block text-xs font-bold text-slate-700 mb-1.5">Current Password</label>
                        <input type="password" class="w-full md:w-1/2 px-4 py-2.5 rounded-lg border border-slate-300 focus:outline-none focus:ring-1 focus:ring-red-500 focus:border-red-500 text-sm" placeholder="Enter current password">
                    </div>
                    <div>
                        <label class="block text-xs font-bold text-slate-700 mb-1.5">New Password</label>
                        <input type="password" class="w-full px-4 py-2.5 rounded-lg border border-slate-300 focus:outline-none focus:ring-1 focus:ring-red-500 focus:border-red-500 text-sm" placeholder="Enter new password">
                    </div>
                    <div>
                        <label class="block text-xs font-bold text-slate-700 mb-1.5">Confirm New Password</label>
                        <input type="password" class="w-full px-4 py-2.5 rounded-lg border border-slate-300 focus:outline-none focus:ring-1 focus:ring-red-500 focus:border-red-500 text-sm" placeholder="Confirm new password">
                    </div>
                </div>

                <div class="mt-6 flex justify-end">
                    <button class="px-6 py-2.5 rounded-lg text-sm font-bold text-white bg-red-600 hover:bg-red-700 transition shadow-sm">Update Password</button>
                </div>
            </div>

        </div>
    </div>

</div>
@endsection
