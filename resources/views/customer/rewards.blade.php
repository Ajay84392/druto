@extends('layouts.customer')

@section('content')
<div class="bg-slate-50 md:bg-white md:rounded-[2rem] md:shadow-xl overflow-hidden min-h-screen md:min-h-[700px] border-x border-b border-slate-100 relative pb-24 md:pb-0 flex flex-col md:p-8">
    
    <!-- Top Bar -->
    <div class="bg-white px-6 pt-12 pb-4 md:p-0 flex justify-between items-center md:mb-8 sticky top-0 z-20">
        <h1 class="text-3xl font-black text-slate-900 tracking-tight">My Rewards</h1>
        <a href="/customer/profile" class="w-12 h-12 border border-slate-200 rounded-full flex items-center justify-center text-slate-600 bg-slate-50 hover:bg-slate-100 transition shadow-sm md:hidden">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z"></path></svg>
        </a>
    </div>

    <!-- Tabs -->
    <div class="bg-white px-6 md:px-0 border-b border-slate-200 flex space-x-12 mb-8">
        <button class="py-4 text-base font-black text-[#900000] border-b-4 border-[#900000]">To Claim</button>
        <button class="py-4 text-base font-semibold text-slate-400 hover:text-slate-600 transition flex items-center space-x-2 border-b-4 border-transparent hover:border-slate-300">
            <span>History</span>
            <span class="bg-[#900000] text-white text-xs font-black px-2 py-1 rounded-full leading-none">2</span>
        </button>
    </div>

    <!-- Empty State Content -->
    <div class="flex-1 flex flex-col items-center justify-center px-8 text-center bg-slate-50 md:bg-transparent rounded-2xl md:border-2 md:border-dashed md:border-slate-200 py-20 mt-4 md:mt-0">
        <div class="w-32 h-32 bg-red-50 rounded-full flex items-center justify-center mb-8 relative">
            <div class="absolute inset-0 bg-red-100 rounded-full scale-125 opacity-50 blur-xl"></div>
            <!-- Gift Icon SVG -->
            <svg class="w-16 h-16 text-[#900000] relative z-10" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M21 11.25v8.25a1.5 1.5 0 01-1.5 1.5H5.25a1.5 1.5 0 01-1.5-1.5v-8.25M12 4.875A2.625 2.625 0 109.375 7.5H12m0-2.625V7.5m0-2.625A2.625 2.625 0 1114.625 7.5H12m0 0V21m-8.625-9.75h18c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125h-18c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125z"></path></svg>
        </div>
        
        <h2 class="text-3xl font-black text-slate-900 mb-4">No Rewards Yet</h2>
        <p class="text-base font-medium text-slate-500 mb-10 max-w-md mx-auto leading-relaxed">Collect more stamps from your favourite businesses to earn exciting rewards! Simply scan their QR code when you visit.</p>
        
        <a href="/customer" class="w-full max-w-xs bg-[#900000] hover:bg-[#7a0000] text-white font-bold py-4 rounded-xl shadow-lg transition text-center text-lg hover:scale-105 transform">
            Explore Businesses
        </a>
    </div>

</div>
@endsection
