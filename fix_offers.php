<?php

$content = file_get_contents('resources/views/merchant/create-offer.blade.php');

// Remove the No Offers template block
$no_offers_block = <<<'HTML'
            <template x-if="offers.length === 0 || (offers.length === 1 && !offers[0].title && !offers[0].description)">
                <div class="col-span-full py-12 flex flex-col items-center justify-center bg-white rounded-2xl border border-[#e2e8f0] border-dashed">
                    <h3 class="text-lg font-bold text-slate-700">No Offers</h3>
                    <p class="text-sm text-[#475569] mb-4">You have not set up any reward programs.</p>
                    <button @click="isCreating = true;" class="text-[#b00000] font-bold">Create One Now</button>
                </div>
            </template>
HTML;

$content = str_replace($no_offers_block, '', $content);

// Wrap the inside of the x-for with x-if to hide the blank initial offer
$xfor_start = <<<'HTML'
            <template x-for="(offer, index) in offers" :key="index">
                <div class="bg-white rounded-2xl p-6 border border-[#e2e8f0] shadow-sm flex items-center space-x-4">
HTML;
$xfor_start_new = <<<'HTML'
            <template x-for="(offer, index) in offers" :key="index">
                <div x-show="offer.title || offer.description" class="bg-white rounded-2xl p-6 border border-[#e2e8f0] shadow-sm flex items-center space-x-4">
HTML;
$content = str_replace($xfor_start, $xfor_start_new, $content);

file_put_contents('resources/views/merchant/create-offer.blade.php', $content);
echo "Updated create-offer view.\n";
