<?php

$file = 'resources/views/merchant/dashboard.blade.php';
$content = file_get_contents($file);

// Fix grid layout for stats (force 2 columns on mobile)
$content = preg_replace('/class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-10"/', 'class="grid grid-cols-2 lg:grid-cols-4 gap-4 mb-8"', $content);

// Ensure the title and select are aligned as requested
$content = preg_replace('/<div class="flex flex-col sm:flex-row justify-between items-start sm:items-center space-y-3 sm:space-y-0 mb-6">/s', '<div class="flex justify-between items-center mb-6">', $content);
$content = preg_replace('/<select class="bg-white border border-\[#e2e8f0\] text-slate-700 text-sm rounded-xl px-3 py-2 shadow-sm focus:outline-none focus:ring-1 focus:ring-\[#b00000\]">/', '<div class="flex items-center space-x-1 cursor-pointer text-sm font-semibold text-slate-500"><span>This Month</span><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></div>', $content);
$content = preg_replace('/<option>This Month<\/option>\s*<option>Last Month<\/option>\s*<option>This Year<\/option>\s*<\/select>/', '', $content);

// Re-adjust stats cards padding for 2 cols
$content = str_replace('p-6 shadow-sm border border-slate-100', 'p-4 sm:p-6 shadow-sm border border-slate-100', $content);
$content = str_replace('text-3xl font-black', 'text-2xl sm:text-3xl font-black', $content);
$content = str_replace('w-12 h-12', 'w-10 h-10', $content);

// Re-structure QR code Card
preg_match('/<!-- QR Code Card.*?-->\s*<div[^>]*>.*?<\/div>\s*<\/div>\s*<\/div>\s*<!-- Side Card/s', $content, $matches);
if (isset($matches[0])) {
    $qrHTML = '
            <!-- QR Code Card -->
            <div class="lg:col-span-2 bg-white rounded-3xl p-5 shadow-sm border border-slate-100 flex flex-col">
                <h3 class="text-xl font-black text-[#0f172a] tracking-tight mb-1">Your QR Code</h3>
                <p class="text-[#475569] text-xs font-medium mb-5">Let customers scan to collect stamps</p>
                
                <div class="flex flex-row items-center space-x-4">
                    <div class="flex-shrink-0">
                        <div class="w-32 h-32 bg-[#f1f5f9] rounded-2xl flex items-center justify-center p-2 border border-[#e2e8f0]">
                            <img src="https://api.qrserver.com/v1/create-qr-code/?size=200x200&data={{ urlencode(url(\'/customer/scan\')) }}" alt="Business QR Code" class="w-full h-full object-contain rounded-xl">
                        </div>
                    </div>
                    
                    <div class="flex-1 flex flex-col space-y-3">
                        <button class="w-full bg-[#b00000] hover:bg-[#8a0000] text-white font-bold py-2.5 rounded-xl shadow-md transition flex justify-center items-center space-x-2 text-xs">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path></svg>
                            <span>Download QR</span>
                        </button>
                        <button class="w-full bg-white hover:bg-[#f1f5f9] border border-[#e2e8f0] text-[#b00000] font-bold py-2.5 rounded-xl transition flex justify-center items-center space-x-2 text-xs">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 17h2a2 2 0 002-2v-4a2 2 0 00-2-2H5a2 2 0 00-2 2v4a2 2 0 002 2h2m2 4h6a2 2 0 002-2v-4a2 2 0 00-2-2H9a2 2 0 00-2 2v4a2 2 0 002 2zm8-12V5a2 2 0 00-2-2H9a2 2 0 00-2 2v4h10z"></path></svg>
                            <span>Print QR</span>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Side Card';

    $content = str_replace($matches[0], $qrHTML, $content);
}

// Re-structure side card slightly to match image
$content = preg_replace('/<h4 class="text-xl font-black mb-2">Pro Plan Active<\/h4>\s*<p.*?<\/p>/s', '<h4 class="text-sm font-black mb-0">You\'re on Pro Plan</h4><p class="text-slate-300 text-xs font-medium">Plan valid until 20 Aug 2026</p>', $content);
$content = preg_replace('/<div class="mt-8">\s*<div.*?<\/button>\s*<\/div>/s', '<div class="mt-4"><div class="bg-white rounded-lg px-4 py-2 flex items-center justify-between text-[#b00000] font-bold text-sm shadow-sm cursor-pointer hover:bg-slate-50 transition"><span>₹999 / year</span><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg></div></div>', $content);
$content = str_replace('<div class="bg-gradient-to-br from-slate-900 to-[#b00000] rounded-[2rem] p-8 shadow-xl text-white flex flex-col justify-between">', '<div class="bg-white rounded-3xl p-5 shadow-sm border border-slate-100 flex flex-row justify-between items-center text-slate-800">', $content);
// Oh wait, the Plan card in the image is a very small, flat card on a white background with a little crown icon.
$planCardReplacement = '
            <!-- Plan Card -->
            <div class="bg-white rounded-3xl p-4 shadow-sm border border-[#e2e8f0] flex flex-row justify-between items-center">
                <div class="flex items-center space-x-3">
                    <div class="w-10 h-10 bg-yellow-50 rounded-xl flex items-center justify-center">
                        <span class="text-xl">👑</span>
                    </div>
                    <div>
                        <h4 class="text-sm font-black text-[#0f172a]">You\'re on Pro Plan</h4>
                        <p class="text-[#475569] text-[10px] font-medium">Plan valid until 20 Aug 2026</p>
                    </div>
                </div>
                
                <div class="bg-red-50 rounded-lg px-3 py-1.5 flex items-center space-x-2 text-[#b00000] cursor-pointer hover:bg-red-100 transition">
                    <span class="font-bold text-xs">₹999 / year</span>
                    <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"></path></svg>
                </div>
            </div>';

preg_match('/<!-- Side Card: Active Plan -->(.*?)<\/div>\s*<\/div>\s*<\/div>/s', $content, $planMatches);
if (isset($planMatches[0])) {
    $content = str_replace($planMatches[0], $planCardReplacement."\n        </div>\n    </div>", $content);
}

file_put_contents($file, $content);
echo "Updated merchant dashboard layout to match design!\n";
