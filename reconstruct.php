<?php

$top = file_get_contents('temp_top.html');
$pricing = '<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
    <div class="text-center mb-12">
        <h2 class="text-3xl font-black text-[#0f172a] mb-4">Simple Plans for Every Business</h2>
        <p class="text-[#475569] font-medium">Choose the plan that fits your business. Upgrade or downgrade anytime.</p>
    </div>
    
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        <!-- Standard -->
        <div class="bg-white rounded-3xl p-8 border border-[#e2e8f0] shadow-sm flex flex-col">
            <h3 class="text-xl font-black text-[#0f172a] mb-4">Standard Plan</h3>
            <div class="mb-2"><span class="text-slate-400 line-through text-sm font-bold">?36,000</span></div>
            <div class="text-3xl font-black text-[#0f172a] mb-2">?24,000 <span class="text-sm font-medium text-[#475569]">/ Year</span></div>
            <p class="text-sm font-bold text-slate-500 mb-6">? Equivalent to ?2,000/month</p>
            
            <ul class="space-y-3 mb-8 flex-1">
                <li class="flex items-center text-sm font-medium text-[#475569]"><svg class="w-5 h-5 text-[#22C55E] mr-2 flex-shrink-0" fill="currentColor" viewBox="0 0 24 24"><path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12zm13.36-1.814a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z" clip-rule="evenodd" /></svg> Customer retention system</li>
                <li class="flex items-center text-sm font-medium text-[#475569]"><svg class="w-5 h-5 text-[#22C55E] mr-2 flex-shrink-0" fill="currentColor" viewBox="0 0 24 24"><path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12zm13.36-1.814a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z" clip-rule="evenodd" /></svg> Free account setup</li>
                <li class="flex items-center text-sm font-medium text-[#475569]"><svg class="w-5 h-5 text-[#22C55E] mr-2 flex-shrink-0" fill="currentColor" viewBox="0 0 24 24"><path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12zm13.36-1.814a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z" clip-rule="evenodd" /></svg> QR code</li>
                <li class="flex items-center text-sm font-medium text-[#475569]"><svg class="w-5 h-5 text-[#22C55E] mr-2 flex-shrink-0" fill="currentColor" viewBox="0 0 24 24"><path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12zm13.36-1.814a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z" clip-rule="evenodd" /></svg> Unlimited QR code scans</li>
                <li class="flex items-center text-sm font-medium text-[#475569]"><svg class="w-5 h-5 text-[#22C55E] mr-2 flex-shrink-0" fill="currentColor" viewBox="0 0 24 24"><path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12zm13.36-1.814a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z" clip-rule="evenodd" /></svg> Standard Support</li>
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
                <li class="flex items-center text-sm font-medium text-[#475569]"><svg class="w-5 h-5 text-[#22C55E] mr-2 flex-shrink-0" fill="currentColor" viewBox="0 0 24 24"><path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12zm13.36-1.814a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z" clip-rule="evenodd" /></svg> Customer retention system</li>
                <li class="flex items-center text-sm font-medium text-[#475569]"><svg class="w-5 h-5 text-[#22C55E] mr-2 flex-shrink-0" fill="currentColor" viewBox="0 0 24 24"><path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12zm13.36-1.814a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z" clip-rule="evenodd" /></svg> Free account setup</li>
                <li class="flex items-center text-sm font-medium text-[#475569]"><svg class="w-5 h-5 text-[#22C55E] mr-2 flex-shrink-0" fill="currentColor" viewBox="0 0 24 24"><path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12zm13.36-1.814a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z" clip-rule="evenodd" /></svg> QR code</li>
                <li class="flex items-center text-sm font-medium text-[#475569]"><svg class="w-5 h-5 text-[#22C55E] mr-2 flex-shrink-0" fill="currentColor" viewBox="0 0 24 24"><path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12zm13.36-1.814a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z" clip-rule="evenodd" /></svg> Unlimited QR code scans</li>
                <li class="flex items-center text-sm font-medium text-[#475569]"><svg class="w-5 h-5 text-[#22C55E] mr-2 flex-shrink-0" fill="currentColor" viewBox="0 0 24 24"><path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12zm13.36-1.814a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z" clip-rule="evenodd" /></svg> Priority Support</li>
                <li class="flex items-center text-sm font-medium text-[#475569]"><svg class="w-5 h-5 text-[#22C55E] mr-2 flex-shrink-0" fill="currentColor" viewBox="0 0 24 24"><path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12zm13.36-1.814a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z" clip-rule="evenodd" /></svg> Free Feature Updates</li>
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
                <li class="flex items-center text-sm font-medium text-slate-300"><svg class="w-5 h-5 text-[#22C55E] mr-2 flex-shrink-0" fill="currentColor" viewBox="0 0 24 24"><path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12zm13.36-1.814a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z" clip-rule="evenodd" /></svg> Customer retention system</li>
                <li class="flex items-center text-sm font-medium text-slate-300"><svg class="w-5 h-5 text-[#22C55E] mr-2 flex-shrink-0" fill="currentColor" viewBox="0 0 24 24"><path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12zm13.36-1.814a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z" clip-rule="evenodd" /></svg> Free account setup</li>
                <li class="flex items-center text-sm font-medium text-slate-300"><svg class="w-5 h-5 text-[#22C55E] mr-2 flex-shrink-0" fill="currentColor" viewBox="0 0 24 24"><path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12zm13.36-1.814a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z" clip-rule="evenodd" /></svg> QR code</li>
                <li class="flex items-center text-sm font-medium text-slate-300"><svg class="w-5 h-5 text-[#22C55E] mr-2 flex-shrink-0" fill="currentColor" viewBox="0 0 24 24"><path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12zm13.36-1.814a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z" clip-rule="evenodd" /></svg> Unlimited QR code scans</li>
                <li class="flex items-center text-sm font-medium text-slate-300"><svg class="w-5 h-5 text-[#22C55E] mr-2 flex-shrink-0" fill="currentColor" viewBox="0 0 24 24"><path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12zm13.36-1.814a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z" clip-rule="evenodd" /></svg> Free Feature Updates</li>
                <li class="flex items-center text-sm font-medium text-slate-300"><svg class="w-5 h-5 text-[#22C55E] mr-2 flex-shrink-0" fill="currentColor" viewBox="0 0 24 24"><path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12zm13.36-1.814a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z" clip-rule="evenodd" /></svg> Priority Support</li>
                <li class="flex items-center text-sm font-medium text-slate-300"><svg class="w-5 h-5 text-[#22C55E] mr-2 flex-shrink-0" fill="currentColor" viewBox="0 0 24 24"><path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12zm13.36-1.814a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z" clip-rule="evenodd" /></svg> Dedicated Relationship Manager</li>
                <li class="flex items-center text-sm font-medium text-slate-300"><svg class="w-5 h-5 text-[#22C55E] mr-2 flex-shrink-0" fill="currentColor" viewBox="0 0 24 24"><path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12zm13.36-1.814a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z" clip-rule="evenodd" /></svg> All Future Updates</li>
            </ul>
            <a href="/merchant/register" class="w-full text-center bg-white text-[#0f172a] hover:bg-slate-100 font-bold py-3 rounded-xl transition">Start 2-Day Trial</a>
        </div>
    </div>
    
    <div class="mt-10 text-center">
        <p class="inline-block bg-indigo-50 text-indigo-700 font-bold px-4 py-2 rounded-lg text-sm">?? Enjoy any plan free for 2 days. No payment required.</p>
    </div>
</div>
';

$footer = '
    <footer class="bg-slate-900 py-12 text-center text-slate-400 border-t border-slate-800">
        <div class="max-w-7xl mx-auto px-4">
            <div class="flex justify-center space-x-6 mb-6">
                <a href="/admin/settings/terms" class="hover:text-white transition font-medium text-sm">Terms & Conditions</a>
                <a href="/admin/settings/privacy-policy" class="hover:text-white transition font-medium text-sm">Privacy Policy</a>
            </div>
            <p class="text-xs">&copy; 2026 BeAurex Inc. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>
';

file_put_contents('resources/views/welcome.blade.php', $top.$pricing.$footer);
echo "Rebuilt layout.\n";
