<?php

$file = 'resources/views/layouts/merchant.blade.php';
$content = file_get_contents($file);

preg_match('/<header.*?<\/header>/s', $content, $matches);
if (isset($matches[0])) {
    $newHeader = '
        <!-- Topbar Desktop (White) -->
        <header class="hidden md:flex h-[72px] bg-white border-b border-[#e2e8f0] items-center justify-between px-6 flex-shrink-0 w-full">
            <div class="flex items-center space-x-3 md:hidden">
                <img src="/images/logo.jpg" alt="BeAurex Logo" class="w-8 h-8 rounded-xl object-cover bg-white">
                <div class="text-lg font-black leading-tight tracking-tight text-[#b00000]">BeAurex</div>
            </div>
            
            <div class="flex items-center space-x-6 ml-auto">
                <button class="relative text-[#475569] hover:text-slate-700 transition">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path></svg>
                    <span class="absolute top-0 right-0 block w-2.5 h-2.5 rounded-full bg-[#b00000] ring-2 ring-white"></span>
                </button>

                <div x-data="{ open: false }" class="relative">
                    <div @click="open = !open" @click.away="open = false" class="flex items-center space-x-3 cursor-pointer select-none bg-[#f1f5f9] hover:bg-slate-100 border border-[#e2e8f0] px-3 py-1.5 rounded-full transition">
                        <img src="https://ui-avatars.com/api/?name=Merchant&background=0D8ABC&color=fff" alt="Merchant" class="w-8 h-8 rounded-full object-cover">
                        <div class="hidden md:block text-left mr-2">
                            <div class="text-sm font-bold text-[#0f172a] leading-tight">{{ auth()->user()->name ?? \'Merchant\' }}</div>
                            <div class="text-[11px] font-semibold text-[#475569]">Business</div>
                        </div>
                        <svg class="w-4 h-4 text-slate-400" :class="{\'rotate-180\': open}" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"></path></svg>
                    </div>

                    <div x-show="open" style="display: none;" class="absolute right-0 mt-2 w-48 bg-white rounded-xl shadow-lg border border-slate-100 py-2 z-50">
                        <a href="/merchant/profile" class="block px-4 py-2 text-sm text-slate-700 hover:bg-[#f1f5f9] hover:text-[#b00000]">My Profile</a>
                        <a href="/merchant/profile" class="block px-4 py-2 text-sm text-slate-700 hover:bg-[#f1f5f9] hover:text-[#b00000]">Settings</a>
                        <div class="border-t border-slate-100 my-1"></div>
                        <a href="/merchant/logout" class="block px-4 py-2 text-sm text-[#b00000] hover:bg-red-50 font-semibold">Logout</a>
                    </div>
                </div>
            </div>
        </header>

        <!-- Topbar Mobile (Red Header as per design) -->
        <header class="md:hidden bg-[#b00000] rounded-b-[2rem] pt-10 pb-6 px-6 text-white shadow-md relative z-10 flex-shrink-0">
            <div class="flex items-center justify-between">
                <div class="flex items-center space-x-3">
                    <div class="w-12 h-12 bg-white rounded-full flex items-center justify-center p-2 shadow-sm">
                        <!-- Store Icon -->
                        <svg class="w-7 h-7 text-[#b00000]" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path></svg>
                    </div>
                    <div>
                        <h2 class="text-xl font-black tracking-tight">{{ auth()->user()->name ?? \'Ka-feen Café\' }}</h2>
                        <div class="flex items-center space-x-2 mt-1">
                            <span class="bg-white text-green-600 text-[10px] font-bold px-2 py-0.5 rounded-full shadow-sm">Active Plan</span>
                            <span class="bg-[#8a0000] text-white border border-red-400 text-[10px] font-bold px-2 py-0.5 rounded-full">Pro Plan</span>
                        </div>
                    </div>
                </div>
                
                <a href="/merchant/profile" class="w-10 h-10 border border-red-300 rounded-full flex items-center justify-center hover:bg-white/10 transition">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z"></path></svg>
                </a>
            </div>
        </header>
';

    $content = str_replace($matches[0], $newHeader, $content);
    file_put_contents($file, $content);
    echo "Updated header successfully.\n";
} else {
    echo "Could not find header.\n";
}
