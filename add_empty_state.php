<?php

$content = file_get_contents('resources/views/merchant/create-offer.blade.php');

$empty_state = <<<'HTML'
            <template x-if="offers.length === 0 || (offers.length === 1 && !offers[0].title && !offers[0].description)">
                <div class="col-span-full py-16 flex flex-col items-center justify-center bg-white rounded-3xl border border-[#e2e8f0] shadow-sm relative overflow-hidden">
                    <div class="absolute inset-0 bg-gradient-to-br from-red-50 to-white opacity-50"></div>
                    <div class="relative z-10 flex flex-col items-center">
                        <div class="w-20 h-20 bg-red-100 rounded-full flex items-center justify-center mb-6 shadow-inner">
                            <svg class="w-10 h-10 text-[#b00000]" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m-3-2.818l.879.659c1.171.879 3.07.879 4.242 0 1.172-.879 1.172-2.303 0-3.182C13.536 12.219 12.768 12 12 12c-.725 0-1.45-.22-2.003-.659-1.106-.879-1.106-2.303 0-3.182s2.9-.879 4.006 0l.415.33M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <h3 class="text-2xl font-black text-[#0f172a] mb-2 tracking-tight">Create Your First Offer</h3>
                        <p class="text-sm text-[#475569] font-medium mb-8 max-w-sm text-center leading-relaxed">
                            Reward your loyal customers! Create attractive offers to encourage repeat visits and grow your business.
                        </p>
                        <button @click="isCreating = true;" class="bg-[#b00000] hover:bg-red-700 text-white px-8 py-3.5 rounded-xl text-sm font-bold shadow-md hover:shadow-lg transition flex items-center space-x-2 transform hover:-translate-y-0.5">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4"></path></svg>
                            <span>Create Offer Now</span>
                        </button>
                    </div>
                </div>
            </template>
HTML;

$search = <<<'HTML'
            </template>


        </div>
HTML;

$replace = <<<HTML
            </template>

$empty_state

        </div>
HTML;

$content = str_replace($search, $replace, $content);
file_put_contents('resources/views/merchant/create-offer.blade.php', $content);
echo "Added professional empty state.\n";
