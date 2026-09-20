<?php

$content = file_get_contents('resources/views/merchant/create-offer.blade.php');

$successMsg = <<<'HTML'
<div class="flex-1 overflow-auto bg-[#f1f5f9] p-4 md:p-6" x-data="rewardApp()">

    @if(session('success'))
        <div class="mb-6 bg-emerald-50 border border-emerald-200 text-emerald-600 px-4 py-3 rounded-xl flex items-center shadow-sm">
            <svg class="w-5 h-5 mr-3 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
            <span class="text-sm font-bold">{{ session('success') }}</span>
        </div>
    @endif
    
    @if($errors->any())
        <div class="mb-6 bg-red-50 border border-red-200 text-[#b00000] px-4 py-3 rounded-xl flex items-center shadow-sm">
            <svg class="w-5 h-5 mr-3 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
            <span class="text-sm font-bold">{{ $errors->first() }}</span>
        </div>
    @endif
HTML;

$content = str_replace('<div class="flex-1 overflow-auto bg-[#f1f5f9] p-4 md:p-6" x-data="rewardApp()">', $successMsg, $content);

file_put_contents('resources/views/merchant/create-offer.blade.php', $content);
echo "Added flash message.\n";
