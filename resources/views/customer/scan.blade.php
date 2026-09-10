@extends('layouts.customer')

@section('content')
<div class="bg-slate-900 md:rounded-[2rem] md:shadow-2xl overflow-hidden min-h-[calc(100vh-5rem)] md:min-h-[700px] relative pb-24 md:pb-0 flex flex-col border border-slate-800">
    
    <!-- Top Bar -->
    <div class="px-6 pt-12 pb-4 md:pt-8 md:px-10 flex justify-between items-center text-white relative z-20">
        <a href="/customer" class="w-12 h-12 rounded-full bg-white/10 flex items-center justify-center hover:bg-white/20 transition cursor-pointer backdrop-blur-sm border border-white/5">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"></path></svg>
        </a>
        <h1 class="text-xl md:text-2xl font-bold tracking-wide">Scan QR Code</h1>
        <button class="w-12 h-12 rounded-full bg-white/10 flex items-center justify-center hover:bg-white/20 transition cursor-pointer backdrop-blur-sm border border-white/5">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
        </button>
    </div>

    <!-- Instructions -->
    <div class="text-center px-8 relative z-20 mt-4 md:mt-8 mb-8 md:mb-16">
        <p class="text-slate-300 text-base md:text-lg font-medium">Position the QR code within the frame<br class="md:hidden"> to collect your stamp</p>
    </div>

    <!-- Scanner Frame -->
    <div class="flex-1 flex justify-center items-center relative z-20 px-8 pb-12">
        <!-- Simulate Camera View (Wider for Web) -->
        <div class="absolute inset-0 bg-slate-800/50 backdrop-blur-sm -z-10"></div>
        <div class="absolute inset-0 flex items-center justify-center -z-20">
             <div class="w-full h-full bg-[radial-gradient(ellipse_at_center,_var(--tw-gradient-stops))] from-slate-600 via-slate-900 to-black opacity-80"></div>
        </div>

        <!-- The Red Scanner Box -->
        <a href="/customer/after-scan" class="relative w-72 h-72 md:w-96 md:h-96 flex items-center justify-center cursor-pointer group">
            <!-- Corners -->
            <div class="absolute top-0 left-0 w-16 h-16 md:w-20 md:h-20 border-t-8 border-l-8 border-[#900000] rounded-tl-2xl"></div>
            <div class="absolute top-0 right-0 w-16 h-16 md:w-20 md:h-20 border-t-8 border-r-8 border-[#900000] rounded-tr-2xl"></div>
            <div class="absolute bottom-0 left-0 w-16 h-16 md:w-20 md:h-20 border-b-8 border-l-8 border-[#900000] rounded-bl-2xl"></div>
            <div class="absolute bottom-0 right-0 w-16 h-16 md:w-20 md:h-20 border-b-8 border-r-8 border-[#900000] rounded-br-2xl"></div>
            
            <!-- Scanning Line Animation -->
            <div class="absolute top-0 left-0 w-full h-1 bg-[#900000] shadow-[0_0_15px_5px_rgba(144,0,0,0.5)] animate-[scan_2s_ease-in-out_infinite]"></div>

            <!-- Fake QR Code inside for prototype -->
            <div class="w-48 h-48 md:w-64 md:h-64 bg-white p-3 rounded-xl opacity-80 group-hover:opacity-100 group-hover:scale-105 transition duration-300 shadow-2xl">
                <svg class="w-full h-full text-slate-800" viewBox="0 0 24 24" fill="currentColor"><path d="M4 4h6v6H4zM14 4h6v6h-6zM4 14h6v6H4zM14 14h6v6h-6z M8 18h2v2H8z M18 8h2v2h-2z M8 8h2v2H8z M18 18h2v2h-2z"/></svg>
            </div>
            
            <div class="absolute -bottom-16 text-white/50 text-sm font-semibold tracking-wider">(Click here to simulate a successful scan)</div>
        </a>
    </div>

</div>

<style>
    @keyframes scan {
        0%, 100% { top: 0%; }
        50% { top: 100%; }
    }
</style>
@endsection
