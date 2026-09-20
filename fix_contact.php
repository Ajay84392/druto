<?php

$file = 'resources/views/welcome.blade.php';
$content = file_get_contents($file);

$startPattern = '<!-- Contact Section -->';
$endPattern = '<!-- Footer -->';

$startPos = strpos($content, $startPattern);
$endPos = strpos($content, $endPattern);

if ($startPos !== false && $endPos !== false) {
    $before = substr($content, 0, $startPos);
    $after = substr($content, $endPos);

    $newContact = '<!-- Contact Section -->
    <div class="bg-slate-50 py-24 relative overflow-hidden">
        <!-- Optional decorative blobs -->
        <div class="absolute top-0 right-0 -mr-20 -mt-20 w-96 h-96 rounded-full bg-red-50 blur-3xl opacity-70"></div>
        <div class="absolute bottom-0 left-0 -ml-20 -mb-20 w-96 h-96 rounded-full bg-indigo-50 blur-3xl opacity-70"></div>
        
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="bg-white rounded-[2.5rem] p-8 md:p-12 shadow-xl shadow-slate-200/50 border border-slate-100">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-20">
                    
                    <!-- Left Side: Contact Info -->
                    <div class="flex flex-col justify-center">
                        <h2 class="text-3xl font-black text-[#0f172a] mb-3">Contact Us</h2>
                        <p class="text-sm font-medium text-slate-500 mb-8">Have custom workflow questions? Message our tracking activation support desk.</p>
                        
                        <div class="space-y-6">
                            <div class="flex items-center space-x-4">
                                <span class="text-xl">??</span>
                                <div>
                                    <h4 class="text-sm font-bold text-slate-800">Email Us</h4>
                                    <a href="mailto:support@BeAurex.com" class="text-sm font-medium text-slate-500 hover:text-[#b00000] transition">support@BeAurex.com</a>
                                </div>
                            </div>
                            
                            <div class="flex items-center space-x-4">
                                <span class="text-xl">??</span>
                                <div>
                                    <h4 class="text-sm font-bold text-slate-800">Call Us</h4>
                                    <p class="text-sm font-medium text-slate-500">Coming Soon</p>
                                </div>
                            </div>
                            
                            <div class="flex items-center space-x-4">
                                <span class="text-xl">??</span>
                                <div>
                                    <h4 class="text-sm font-bold text-slate-800">Visit Us</h4>
                                    <p class="text-sm font-medium text-slate-500">Delhi NCR, India</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Right Side: Form -->
                    <div class="flex flex-col justify-center">
                        <form class="space-y-4">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <input type="text" placeholder="Your Name" class="w-full bg-transparent border border-slate-200 rounded-lg px-4 py-3 text-sm focus:outline-none focus:border-[#b00000] focus:ring-1 focus:ring-[#b00000] placeholder-slate-400">
                                <input type="text" placeholder="Mobile Number" class="w-full bg-transparent border border-slate-200 rounded-lg px-4 py-3 text-sm focus:outline-none focus:border-[#b00000] focus:ring-1 focus:ring-[#b00000] placeholder-slate-400">
                            </div>
                            <div>
                                <input type="email" placeholder="Email Address" class="w-full bg-transparent border border-slate-200 rounded-lg px-4 py-3 text-sm focus:outline-none focus:border-[#b00000] focus:ring-1 focus:ring-[#b00000] placeholder-slate-400">
                            </div>
                            <div>
                                <textarea rows="3" placeholder="Tell us about your business" class="w-full bg-transparent border border-slate-200 rounded-lg px-4 py-3 text-sm focus:outline-none focus:border-[#b00000] focus:ring-1 focus:ring-[#b00000] placeholder-slate-400"></textarea>
                            </div>
                            <button type="button" class="w-full bg-[#e11d48] hover:bg-[#be123c] text-white font-bold py-3.5 rounded-lg transition shadow-md shadow-red-500/20">Send Message</button>
                        </form>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    
    ';

    file_put_contents($file, $before.$newContact.$after);
    echo "Replaced contact section successfully.\n";
} else {
    echo "Could not find start or end pattern.\n";
}
