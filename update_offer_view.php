<?php

$content = file_get_contents('resources/views/merchant/create-offer.blade.php');

$list_view = <<<'HTML'
    <!-- List View -->
    <div x-show="!isCreating" x-transition class="w-full space-y-6 pb-24">
        <div class="flex justify-between items-center mb-6">
            <div>
                <h2 class="text-2xl font-black text-[#0f172a] tracking-tight">Your Offers</h2>
                <p class="text-sm font-semibold text-slate-500 mt-1">Manage your reward programs.</p>
            </div>
            <button @click="isCreating = true;" class="bg-[#b00000] hover:bg-red-700 text-white px-6 py-2.5 rounded-xl text-sm font-bold shadow-sm transition flex items-center space-x-2">
                <span>Create Offer</span>
                <span class="text-lg leading-none">+</span>
            </button>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <template x-for="(offer, index) in offers" :key="index">
                <div class="bg-white rounded-2xl p-6 border border-[#e2e8f0] shadow-sm flex items-center space-x-4">
                    <div class="w-20 h-20 bg-slate-100 rounded-xl overflow-hidden flex-shrink-0">
                        <template x-if="offer.image">
                            <img :src="offer.image" class="w-full h-full object-cover">
                        </template>
                        <template x-if="!offer.image">
                            <div class="w-full h-full flex flex-col items-center justify-center bg-[#b00000] text-white">
                                <span class="font-black text-2xl leading-none" x-text="offer.visits"></span>
                                <span class="text-[10px] font-bold">STAMPS</span>
                            </div>
                        </template>
                    </div>
                    <div class="flex-1 min-w-0">
                        <h3 class="font-black text-[#0f172a] leading-tight truncate" x-text="offer.title || offer.description || 'No Description'"></h3>
                        <p class="text-sm font-bold text-[#b00000] mt-1"><span x-text="offer.visits"></span> Stamps Required</p>
                        <p class="text-xs text-gray-400 font-semibold mt-1">Expires in <span x-text="offer.expiry"></span> days</p>
                    </div>
                    <!-- Edit button to open create mode -->
                    <button @click="isCreating = true;" class="text-slate-400 hover:text-[#b00000] p-2">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path></svg>
                    </button>
                </div>
            </template>

            <template x-if="offers.length === 0 || (offers.length === 1 && !offers[0].title && !offers[0].description)">
                <div class="col-span-full py-12 flex flex-col items-center justify-center bg-white rounded-2xl border border-[#e2e8f0] border-dashed">
                    <h3 class="text-lg font-bold text-slate-700">No Offers</h3>
                    <p class="text-sm text-[#475569] mb-4">You have not set up any reward programs.</p>
                    <button @click="isCreating = true;" class="text-[#b00000] font-bold">Create One Now</button>
                </div>
            </template>
        </div>
    </div>

    <!-- Create View -->
    <div x-show="isCreating" x-transition class="pb-24 w-full space-y-6" style="display: none;">
        <div class="flex justify-between items-center mb-2">
            <button @click="isCreating = false;" class="text-slate-500 hover:text-[#0f172a] font-bold flex items-center space-x-2">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
                <span>Back to Offers</span>
            </button>
        </div>
HTML;

$content = str_replace('<div class="pb-24 w-full space-y-6">', $list_view, $content);

$js_find = "offers: @json(\$offers),\n            showPreview: false,";
$js_replace = "offers: @json(\$offers),\n            showPreview: false,\n            isCreating: false,";
$content = str_replace($js_find, $js_replace, $content);

file_put_contents('resources/views/merchant/create-offer.blade.php', $content);
echo "Updated create-offer view.\n";
