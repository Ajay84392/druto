@extends('layouts.customer')

@section('content')
<div class="bg-slate-50 md:bg-transparent min-h-screen md:min-h-0 relative pb-24 md:pb-0">
    
    <!-- Top Bar -->
    <div class="bg-white px-6 pt-12 pb-4 md:pt-6 md:pb-6 md:px-8 flex items-center md:rounded-t-[2rem] border-b border-slate-100 shadow-sm sticky top-0 md:relative z-20">
        <a href="/customer" class="w-10 h-10 -ml-2 md:ml-0 rounded-full flex items-center justify-center text-slate-900 hover:bg-slate-100 transition">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
        </a>
        <div class="flex items-center space-x-4 ml-4">
            <div class="w-12 h-12 bg-slate-900 rounded-xl flex items-center justify-center text-white shadow-md">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z"></path></svg>
            </div>
            <div>
                <h1 class="text-xl font-black text-slate-900 leading-tight">Ka-feen</h1>
                <p class="text-sm font-semibold text-slate-500">Coffee Shop</p>
            </div>
        </div>
    </div>

    <!-- Main Grid Content -->
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-6 md:gap-8 mt-6 md:px-0">

        <!-- Left Column: Success Message & Stamps -->
        <div class="lg:col-span-5">
            <div class="px-6 md:px-8 py-12 bg-white md:rounded-[2rem] border-y md:border border-slate-100 md:shadow-lg relative overflow-hidden h-full flex flex-col justify-center">
                <!-- Confetti effect -->
                <div class="absolute inset-0 pointer-events-none opacity-40">
                    <div class="absolute top-10 left-10 w-3 h-3 bg-red-400 rounded-sm rotate-45"></div>
                    <div class="absolute top-20 right-16 w-4 h-4 bg-emerald-400 rounded-full"></div>
                    <div class="absolute bottom-20 left-1/4 w-3 h-3 bg-yellow-400 rounded-full"></div>
                    <div class="absolute bottom-12 right-1/4 w-4 h-4 bg-blue-400 rounded-sm rotate-12"></div>
                </div>
                
                <div class="text-center relative z-10">
                    <div class="w-24 h-24 bg-emerald-100 text-emerald-500 rounded-full flex items-center justify-center mx-auto mb-6 shadow-inner animate-bounce">
                        <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path></svg>
                    </div>

                    <h2 class="text-3xl font-black text-slate-900 mb-2">You earned 1 stamp!</h2>
                    <p class="text-base font-semibold text-slate-500 mb-10">3 of 5 stamps collected</p>
                    
                    <div class="flex items-center justify-center space-x-4">
                        <div class="w-14 h-14 bg-[#900000] rounded-full flex items-center justify-center text-white shadow-xl transform hover:scale-110 transition"><svg class="w-7 h-7" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z"/></svg></div>
                        <div class="w-14 h-14 bg-[#900000] rounded-full flex items-center justify-center text-white shadow-xl transform hover:scale-110 transition"><svg class="w-7 h-7" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z"/></svg></div>
                        <div class="w-14 h-14 bg-[#900000] rounded-full flex items-center justify-center text-white shadow-xl transform hover:scale-110 transition"><svg class="w-7 h-7" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z"/></svg></div>
                        <div class="w-14 h-14 bg-slate-50 border-4 border-slate-200 rounded-full border-dashed"></div>
                        <div class="w-14 h-14 bg-slate-50 border-4 border-slate-200 rounded-full border-dashed"></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Right Column: Available Rewards -->
        <div class="lg:col-span-7 px-6 md:px-0 lg:pr-8">
            <h3 class="text-xl font-black text-slate-900 tracking-tight mb-6 mt-6 md:mt-0">Available Rewards</h3>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                
                <!-- Reward 1 (Achieved) -->
                <div class="bg-white rounded-2xl p-5 shadow-[0_4px_20px_-4px_rgba(0,0,0,0.05)] border-2 border-emerald-400 flex flex-col md:col-span-2 relative overflow-hidden transition hover:shadow-[0_8px_30px_-4px_rgba(16,185,129,0.2)]">
                    <div class="absolute -right-10 -top-10 w-40 h-40 bg-emerald-50 rounded-full opacity-50 pointer-events-none"></div>
                    
                    <div class="flex items-center space-x-5 relative z-10">
                        <div class="w-20 h-20 bg-gradient-to-br from-orange-400 to-red-500 rounded-2xl flex-shrink-0 shadow-lg border border-red-200"></div>
                        <div class="flex-1">
                            <div class="flex justify-between items-start mb-2">
                                <h4 class="font-black text-slate-900 text-lg">30% off on next purchase</h4>
                                <span class="bg-emerald-500 text-white text-[10px] font-black uppercase px-2.5 py-1 rounded-md tracking-wider shadow-sm">Achieved</span>
                            </div>
                            <p class="text-sm font-bold text-[#900000] mb-2 bg-red-50 inline-block px-3 py-1 rounded-lg">2 STAMPS <span class="text-slate-500 font-medium ml-1 border-l border-red-200 pl-2">Ready to claim! 🎉</span></p>
                            <p class="text-[11px] font-semibold text-slate-400 uppercase tracking-widest mt-1">Expires 7/30/2026</p>
                        </div>
                    </div>
                </div>

                <!-- Reward 2 -->
                <div class="bg-white rounded-2xl p-5 shadow-[0_4px_20px_-4px_rgba(0,0,0,0.05)] border border-slate-100 flex flex-col transition hover:border-slate-300">
                    <div class="flex items-center space-x-4 mb-4">
                        <div class="w-16 h-16 bg-slate-200 rounded-xl flex-shrink-0 shadow-inner"></div>
                        <div>
                            <h4 class="font-black text-slate-900 text-base mb-1">50% discount</h4>
                            <p class="text-[11px] font-semibold text-slate-400 uppercase tracking-widest">Expires 7/30/2026</p>
                        </div>
                    </div>
                    <div class="mt-auto bg-slate-50 p-3 rounded-xl border border-slate-100">
                        <p class="text-sm font-bold text-[#900000]">5 STAMPS</p>
                        <p class="text-xs text-slate-500 font-medium mt-0.5">Collect 2 more stamps</p>
                    </div>
                </div>

                <!-- Reward 3 -->
                <div class="bg-white rounded-2xl p-5 shadow-[0_4px_20px_-4px_rgba(0,0,0,0.05)] border border-slate-100 flex flex-col transition hover:border-slate-300">
                    <div class="flex items-center space-x-4 mb-4">
                        <div class="w-16 h-16 bg-slate-200 rounded-xl flex-shrink-0 shadow-inner"></div>
                        <div>
                            <h4 class="font-black text-slate-900 text-base mb-1">Free Coffee</h4>
                            <p class="text-[11px] font-semibold text-slate-400 uppercase tracking-widest">Expires 7/30/2026</p>
                        </div>
                    </div>
                    <div class="mt-auto bg-slate-50 p-3 rounded-xl border border-slate-100">
                        <p class="text-sm font-bold text-[#900000]">3 STAMPS</p>
                        <p class="text-xs text-slate-500 font-medium mt-0.5">Collect 1 more stamp</p>
                    </div>
                </div>

            </div>
        </div>

    </div>

</div>
@endsection
