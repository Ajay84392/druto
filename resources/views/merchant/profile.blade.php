@extends('layouts.merchant')

@section('title', 'Merchant Profile')

@section('content')
<div class="flex-1 overflow-auto p-4 md:p-10">
    <div class="mb-8">
        <h1 class="text-2xl font-bold text-[#0f172a] mb-1">Merchant Profile</h1>
        <div class="text-xs text-[#475569] font-medium flex items-center space-x-1">
            <a href="/merchant" class="hover:text-[#b00000] transition">Home</a>
            <svg class="w-3 h-3 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"></path></svg>
            <span class="text-[#0f172a]">Profile</span>
        </div>
    </div>

    @if(session('success'))
        <div class="mb-4 p-4 rounded-xl bg-emerald-50 border border-emerald-200 text-emerald-700 text-sm font-bold flex items-center">
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
            {{ session('success') }}
        </div>
    @endif
    @if($errors->any())
        <div class="mb-4 p-4 rounded-xl bg-red-50 border border-red-200 text-[#8a0000] text-sm font-bold">
            <ul class="list-disc pl-5">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="bg-white rounded-[2rem] shadow-sm border border-slate-100 max-w-md mx-auto mt-6">
        <!-- Top Section with Avatar -->
        <div class="p-6 md:p-8 flex items-center space-x-5">
            @php
                $nameParts = explode(' ', auth()->user()->name);
                $initials = strtoupper(substr($nameParts[0], 0, 1));
                if (count($nameParts) > 1) {
                    $initials .= strtoupper(substr($nameParts[1], 0, 1));
                }
                $business = App\Models\Business::where('user_id', auth()->id())->first();
                $phone = $business ? $business->phone : auth()->user()->phone;
            @endphp
            <div class="w-[60px] h-[60px] rounded-full bg-red-50 text-[#b00000] flex items-center justify-center text-xl font-bold shrink-0">
                {{ $initials }}
            </div>
            <div class="flex-1">
                <h2 class="text-[17px] font-black text-slate-900 leading-tight">{{ auth()->user()->name }}</h2>
                <div class="text-[11px] text-slate-500 font-semibold flex items-center mt-1">
                    Business ID: BUS-{{ substr(md5(auth()->user()->id), 0, 6) }}
                    <button class="ml-1.5 text-slate-400 hover:text-slate-600 transition" title="Copy ID">
                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z"></path></svg>
                    </button>
                </div>
            </div>
        </div>
        
        <!-- Divider -->
        <div class="h-px bg-slate-100 mx-6 md:mx-8"></div>

        <!-- Contact Info -->
        <div class="p-6 md:p-8 space-y-6">
            <!-- Phone -->
            <div class="flex items-center space-x-4 text-[13px] font-semibold text-slate-700">
                <svg class="w-5 h-5 text-slate-400 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                <span>{{ $phone ?? '+91 98765 43210' }}</span>
            </div>
            
            <!-- Email -->
            <div class="flex items-center space-x-4 text-[13px] font-semibold text-slate-700">
                <svg class="w-5 h-5 text-slate-400 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                <span class="truncate">{{ auth()->user()->email }}</span>
            </div>
        </div>

        <!-- Divider -->
        <div class="h-px bg-slate-100 mx-6 md:mx-8"></div>

        <!-- Settings Menu -->
        <div class="p-4 md:p-6 space-y-1">
            <a href="#" class="flex items-center justify-between p-3 rounded-xl hover:bg-slate-50 transition text-[13px] font-bold text-slate-700 group">
                <div class="flex items-center space-x-4">
                    <svg class="w-5 h-5 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
                    <span>Privacy Policy</span>
                </div>
                <svg class="w-4 h-4 text-slate-300 group-hover:text-slate-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
            </a>
            
            <a href="#" class="flex items-center justify-between p-3 rounded-xl hover:bg-slate-50 transition text-[13px] font-bold text-slate-700 group">
                <div class="flex items-center space-x-4">
                    <svg class="w-5 h-5 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                    <span>Terms & Conditions</span>
                </div>
                <svg class="w-4 h-4 text-slate-300 group-hover:text-slate-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
            </a>
        </div>

        <!-- Divider -->
        <div class="h-px bg-slate-100 mx-6 md:mx-8"></div>

        <!-- Logout -->
        <div class="p-4 md:p-6 pb-6 md:pb-8">
            <a href="{{ route('merchant.logout') }}" class="w-full flex items-center justify-between p-3 rounded-xl hover:bg-red-50 transition text-[13px] font-bold text-[#b00000] group">
                <div class="flex items-center space-x-4">
                    <svg class="w-5 h-5 text-[#b00000]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path></svg>
                    <span>Logout</span>
                </div>
                <svg class="w-4 h-4 text-red-300 group-hover:text-[#b00000]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
            </a>
        </div>
    </div>
</div>
@endsection
