<?php

$file = 'resources/views/welcome.blade.php';
$content = file_get_contents($file);

$startPattern = '<div class="grid grid-cols-1 md:grid-cols-3 gap-8">';
$endPattern = '<div class="mt-10 text-center">';

$startPos = strpos($content, $startPattern);
$endPos = strpos($content, $endPattern);

if ($startPos !== false && $endPos !== false) {
    $before = substr($content, 0, $startPos);
    $after = substr($content, $endPos);

    $newGrid = '<div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Standard -->
                <div class="bg-white rounded-3xl p-8 border border-[#e2e8f0] shadow-sm flex flex-col">
                    <h3 class="text-xl font-black text-[#0f172a] mb-4">Standard Plan</h3>
                    <div class="mb-2"><span class="text-slate-400 line-through text-sm font-bold">?36,000</span></div>
                    <div class="text-3xl font-black text-[#0f172a] mb-2">?24,000 <span class="text-sm font-medium text-[#475569]">/ Year</span></div>
                    <p class="text-sm font-bold text-slate-500 mb-6">? Equivalent to ?2,000/month</p>
                    
                    <ul class="space-y-3 mb-8 flex-1">
                        <li class="flex items-center text-sm font-medium text-[#475569]"><span class="text-[#22C55E] mr-2">?</span> Customer retention system</li>
                        <li class="flex items-center text-sm font-medium text-[#475569]"><span class="text-[#22C55E] mr-2">?</span> Free account setup</li>
                        <li class="flex items-center text-sm font-medium text-[#475569]"><span class="text-[#22C55E] mr-2">?</span> QR code</li>
                        <li class="flex items-center text-sm font-medium text-[#475569]"><span class="text-[#22C55E] mr-2">?</span> Unlimited QR code scans</li>
                        <li class="flex items-center text-sm font-medium text-[#475569]"><span class="text-[#22C55E] mr-2">?</span> Standard Support</li>
                    </ul>
                    <a href="/merchant/register" class="w-full text-center bg-white border-2 border-[#0f172a] text-[#0f172a] font-bold py-3 rounded-xl hover:bg-slate-50 transition">Start 2-Day Trial</a>
                </div>

                <!-- Professional -->
                <div class="bg-white rounded-3xl p-8 border-2 border-[#b00000] shadow-xl flex flex-col relative transform md:-translate-y-4">
                    <div class="absolute top-0 left-1/2 transform -translate-x-1/2 -translate-y-1/2 bg-[#b00000] text-white px-4 py-1 rounded-full text-xs font-bold uppercase tracking-wider">Most Popular</div>
                    <h3 class="text-xl font-black text-[#0f172a] mb-4">Professional Plan</h3>
                    <div class="mb-2"><span class="text-slate-400 line-through text-sm font-bold">?72,000</span></div>
                    <div class="text-3xl font-black text-[#0f172a] mb-2">?49,000 <span class="text-sm font-medium text-[#475569]">/ 3 Years</span></div>
                    <p class="text-sm font-bold text-red-600 mb-6">?? Only ?1,361/month</p>
                    
                    <ul class="space-y-3 mb-8 flex-1">
                        <li class="flex items-center text-sm font-medium text-[#475569]"><span class="text-[#22C55E] mr-2">?</span> Customer retention system</li>
                        <li class="flex items-center text-sm font-medium text-[#475569]"><span class="text-[#22C55E] mr-2">?</span> Free account setup</li>
                        <li class="flex items-center text-sm font-medium text-[#475569]"><span class="text-[#22C55E] mr-2">?</span> QR code</li>
                        <li class="flex items-center text-sm font-medium text-[#475569]"><span class="text-[#22C55E] mr-2">?</span> Unlimited QR code scans</li>
                        <li class="flex items-center text-sm font-medium text-[#475569]"><span class="text-[#22C55E] mr-2">?</span> Priority Support</li>
                        <li class="flex items-center text-sm font-medium text-[#475569]"><span class="text-[#22C55E] mr-2">?</span> Free Feature Updates</li>
                    </ul>
                    <a href="/merchant/register" class="w-full text-center bg-[#b00000] hover:bg-[#8a0000] text-white font-bold py-3 rounded-xl transition">Start 2-Day Trial</a>
                </div>

                <!-- Legacy -->
                <div class="bg-[#0f172a] rounded-3xl p-8 border border-slate-700 shadow-xl flex flex-col relative">
                    <div class="absolute top-0 right-8 transform -translate-y-1/2 bg-amber-400 text-amber-950 px-3 py-1 rounded-full text-[10px] font-black uppercase tracking-wider">Best Value</div>
                    <h3 class="text-xl font-black text-white mb-4">Legacy Plan</h3>
                    <div class="mb-2"><span class="text-slate-500 line-through text-sm font-bold">?1,20,000</span></div>
                    <div class="text-3xl font-black text-amber-400 mb-2">?75,000</div>
                    <p class="text-sm font-bold text-slate-300 mb-6">One-Time Payment<br>No Renewals</p>
                    
                    <ul class="space-y-3 mb-8 flex-1">
                        <li class="flex items-center text-sm font-medium text-slate-300"><span class="text-[#22C55E] mr-2">?</span> Customer retention system</li>
                        <li class="flex items-center text-sm font-medium text-slate-300"><span class="text-[#22C55E] mr-2">?</span> Free account setup</li>
                        <li class="flex items-center text-sm font-medium text-slate-300"><span class="text-[#22C55E] mr-2">?</span> QR code</li>
                        <li class="flex items-center text-sm font-medium text-slate-300"><span class="text-[#22C55E] mr-2">?</span> Unlimited QR code scans</li>
                        <li class="flex items-center text-sm font-medium text-slate-300"><span class="text-[#22C55E] mr-2">?</span> Free Feature Updates</li>
                        <li class="flex items-center text-sm font-medium text-slate-300"><span class="text-[#22C55E] mr-2">?</span> Priority Support</li>
                        <li class="flex items-center text-sm font-medium text-slate-300"><span class="text-[#22C55E] mr-2">?</span> Dedicated Relationship Manager</li>
                        <li class="flex items-center text-sm font-medium text-slate-300"><span class="text-[#22C55E] mr-2">?</span> All Future Updates</li>
                    </ul>
                    <a href="/merchant/register" class="w-full text-center bg-white text-[#0f172a] hover:bg-slate-100 font-bold py-3 rounded-xl transition">Start 2-Day Trial</a>
                </div>
            </div>
            
            ';

    file_put_contents($file, $before.$newGrid.$after);
    echo "Replaced pricing grid successfully.\n";
} else {
    echo "Could not find start or end pattern.\n";
}
