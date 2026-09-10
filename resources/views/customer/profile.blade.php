@extends('layouts.customer')

@section('content')
<div class="bg-slate-50 md:bg-white md:rounded-[2rem] md:shadow-xl overflow-hidden min-h-screen md:min-h-[700px] border-x border-b border-slate-100 relative pb-24 md:pb-8 flex flex-col md:p-8">
    
    <!-- Top Bar -->
    <div class="bg-white px-6 pt-12 pb-4 md:p-0 flex justify-between items-center border-b border-slate-100 md:border-b-0 sticky top-0 md:relative z-20 md:mb-8">
        <h1 class="text-3xl font-black text-slate-900 tracking-tight">Profile Settings</h1>
        <button class="w-12 h-12 border border-slate-200 rounded-full flex items-center justify-center text-slate-600 bg-slate-50 hover:bg-slate-100 transition shadow-sm md:hidden">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path></svg>
        </button>
    </div>

    <div class="px-6 md:px-0 pt-8 space-y-8 md:max-w-3xl md:mx-auto w-full">
        
        <!-- User Info Card -->
        <div class="bg-white rounded-2xl p-6 md:p-8 shadow-sm md:shadow-lg border border-slate-100 flex items-center justify-between relative overflow-hidden">
            <div class="absolute right-0 top-0 w-32 h-32 bg-red-50 rounded-full blur-2xl opacity-50 -translate-y-1/2 translate-x-1/4 pointer-events-none"></div>

            <div class="flex items-center space-x-6 relative z-10">
                <div class="w-20 h-20 bg-red-50 rounded-full flex items-center justify-center text-3xl font-black text-[#900000] border-2 border-red-100 shadow-inner">
                    AK
                </div>
                <div>
                    <h2 class="text-2xl font-black text-slate-900 leading-tight mb-1">Ajeet Kumar</h2>
                    <p class="text-xs font-bold text-slate-500 uppercase tracking-widest bg-slate-100 inline-block px-3 py-1 rounded-md">Customer ID: LQR-8F4A29</p>
                </div>
            </div>
            <button class="text-slate-400 hover:text-[#900000] transition p-3 bg-slate-50 hover:bg-red-50 rounded-xl relative z-10 hidden md:flex items-center space-x-2 font-bold text-sm">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path></svg>
                <span>Edit Profile</span>
            </button>
            <button class="md:hidden text-slate-400 hover:text-[#900000] transition p-2 relative z-10">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path></svg>
            </button>
        </div>

        <!-- Links List -->
        <div class="bg-white rounded-2xl shadow-sm md:shadow-lg border border-slate-100 overflow-hidden divide-y divide-slate-100">
            
            <div class="flex items-center px-6 py-5 hover:bg-slate-50 transition cursor-pointer">
                <div class="text-slate-400 w-12 flex justify-center">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                </div>
                <div class="flex-1 text-base font-semibold text-slate-700">
                    +91 98765 43210
                </div>
                <div class="text-slate-400 text-xs font-bold uppercase tracking-widest hidden md:block">Primary Phone</div>
            </div>
            
            <div class="flex items-center px-6 py-5 hover:bg-slate-50 transition cursor-pointer">
                <div class="text-slate-400 w-12 flex justify-center">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                </div>
                <div class="flex-1 text-base font-semibold text-slate-700">
                    ajeet.kumar@gmail.com
                </div>
                <div class="text-slate-400 text-xs font-bold uppercase tracking-widest hidden md:block">Primary Email</div>
            </div>

            <a href="#" class="flex items-center px-6 py-5 hover:bg-slate-50 transition group">
                <div class="text-slate-400 w-12 flex justify-center group-hover:text-slate-600 transition">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
                </div>
                <div class="flex-1 text-base font-semibold text-slate-700 group-hover:text-slate-900 transition">
                    Privacy Policy
                </div>
                <div class="text-slate-300 group-hover:text-slate-500 transition transform group-hover:translate-x-1">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"></path></svg>
                </div>
            </a>

            <a href="#" class="flex items-center px-6 py-5 hover:bg-slate-50 transition group">
                <div class="text-slate-400 w-12 flex justify-center group-hover:text-slate-600 transition">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                </div>
                <div class="flex-1 text-base font-semibold text-slate-700 group-hover:text-slate-900 transition">
                    Terms & Conditions
                </div>
                <div class="text-slate-300 group-hover:text-slate-500 transition transform group-hover:translate-x-1">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"></path></svg>
                </div>
            </a>
            
            <!-- Trigger Logout Modal (using JS for prototype) -->
            <button onclick="document.getElementById('logoutModal').classList.remove('hidden')" class="w-full flex items-center px-6 py-5 hover:bg-red-50 transition group">
                <div class="text-[#900000] w-12 flex justify-center transform group-hover:-translate-x-1 transition">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path></svg>
                </div>
                <div class="flex-1 text-base font-bold text-[#900000] text-left">
                    Logout
                </div>
                <div class="text-red-200 group-hover:text-[#900000] transition transform group-hover:translate-x-1">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"></path></svg>
                </div>
            </button>
        </div>

    </div>

</div>

<!-- Logout Confirmation Modal (Screen 21) -->
<div id="logoutModal" class="hidden fixed inset-0 z-50 flex items-center justify-center px-4 bg-slate-900/40 backdrop-blur-sm">
    <div class="bg-white rounded-[2rem] w-full max-w-sm p-8 text-center shadow-2xl transform transition-all scale-100">
        <div class="w-20 h-20 bg-red-50 rounded-full flex items-center justify-center text-[#900000] mx-auto mb-6">
            <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path></svg>
        </div>
        <h3 class="text-2xl font-black text-slate-900 mb-2">Logout?</h3>
        <p class="text-base font-medium text-slate-500 mb-8">Are you sure you want to logout from your account?</p>
        <div class="flex space-x-4">
            <button onclick="document.getElementById('logoutModal').classList.add('hidden')" class="flex-1 py-4 border-2 border-slate-200 text-slate-700 font-bold rounded-xl hover:bg-slate-50 transition text-lg">Cancel</button>
            <a href="/customer/logout" class="flex-1 py-4 bg-[#900000] text-white font-bold rounded-xl hover:bg-[#7a0000] shadow-md transition flex items-center justify-center text-lg">Logout</a>
        </div>
    </div>
</div>

@endsection
