<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LoyaltyQR - Turn Every Visit Into A Repeat Customer</title>
    <!-- Tailwind CSS for modern responsive aesthetics -->
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <style>
        .modal { display: none; }
        .modal.active { display: flex; }
    </style>
</head>
<body class="bg-slate-50 text-slate-800 font-sans antialiased">

    <!-- Top Trust Notification Bar -->
    <div class="bg-slate-900 text-white text-center py-2.5 text-xs font-bold tracking-wide px-4 flex items-center justify-center space-x-2">
        <span>🇮🇳 Trusted by Fast-Growing Businesses Across India</span>
        <span class="hidden md:inline bg-red-600 px-2 py-0.5 rounded text-[10px] uppercase animate-pulse">2-Day Free Trial Active</span>
    </div>

    <!-- Navigation Bar -->
    <nav class="bg-white border-b border-slate-200/80 sticky top-0 z-50 shadow-sm">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-20 flex items-center justify-between">
            <!-- Logo -->
            <div class="flex items-center space-x-2">
                <div class="w-9 h-9 bg-red-600 rounded-lg flex items-center justify-center shadow-md">
                    <span class="text-white font-black text-lg">Q</span>
                </div>
                <span class="text-xl font-black tracking-tight text-slate-900">Loyalty<span class="text-red-600">QR</span></span>
            </div>
            
            <!-- Portals Dropdown / Action -->
            <div class="flex items-center space-x-4 sm:space-x-6">
                <div class="relative group">
                    <button onclick="document.getElementById('loginDropdown').classList.toggle('hidden')" class="text-slate-600 hover:text-slate-900 font-bold text-sm sm:text-base cursor-pointer flex items-center space-x-1">
                        <span>Login</span>
                        <span class="text-xs">▼</span>
                    </button>
                    <div id="loginDropdown" class="absolute right-0 mt-2 w-48 bg-white border border-slate-200 rounded-xl shadow-xl hidden sm:group-hover:block z-50">
                        <a href="/merchant" class="w-full text-left px-4 py-3 text-sm hover:bg-slate-50 font-semibold text-slate-700 block">Store Owner Login</a>
                        <a href="/login" class="w-full text-left px-4 py-3 text-sm hover:bg-slate-50 font-semibold text-slate-700 block border-t border-slate-100">Customer Rewards Login</a>
                    </div>
                </div>

                <button onclick="toggleModal('signupModal')" class="bg-red-600 hover:bg-red-700 text-white font-bold px-4 py-2.5 rounded-xl shadow-md transition transform hover:-translate-y-0.5 cursor-pointer text-sm sm:text-base">Start Free Trial</button>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <header class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-16 pb-16 text-center relative">
        <h1 class="text-4xl sm:text-5xl lg:text-6xl font-black text-slate-900 tracking-tight leading-tight max-w-4xl mx-auto mb-6">
            Turn Every Customer Visit Into A <span class="text-red-600">Repeat Customer</span>
        </h1>
        
        <p class="text-lg sm:text-xl text-slate-600 max-w-2xl mx-auto mb-8 font-medium leading-relaxed">
            A powerful system that turns your business into a customer magnet.
        </p>
        
        <div class="flex flex-col sm:flex-row justify-center items-center space-y-3 sm:space-y-0 sm:space-x-4 max-w-md mx-auto mb-6">
            <button onclick="toggleModal('signupModal')" class="w-full bg-red-600 hover:bg-red-700 text-white font-bold px-6 py-3.5 rounded-xl text-md shadow-lg shadow-red-600/20 transition transform hover:-translate-y-0.5 cursor-pointer">
                Claim Your 2-Day Free Trial
            </button>
        </div>

        <div class="max-w-2xl mx-auto bg-slate-100 border border-slate-200/60 rounded-xl p-3.5 mb-16">
            <p class="text-xs sm:text-sm text-slate-700 font-medium leading-relaxed">
                🇮🇳 A Proudly Indian Platform Built with love to empower local retailers & businesses across INDIA.
            </p>
        </div>

        <!-- CORE STRENGTHS GRID -->
        <div class="max-w-5xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-6 text-left">
            <div class="bg-white border border-slate-200/80 p-6 rounded-2xl shadow-xs hover:shadow-md transition">
                <div class="w-10 h-10 bg-red-50 text-red-600 rounded-xl flex items-center justify-center mb-4">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
                </div>
                <h3 class="font-bold text-slate-900 text-base mb-1">Zero Hidden Contracts</h3>
                <p class="text-slate-500 text-xs leading-relaxed">No credit card required to start. No auto-debits, No hidden charges, No forced renewals</p>
            </div>
            
            <div class="bg-white border border-slate-200/80 p-6 rounded-2xl shadow-xs hover:shadow-md transition">
                <div class="w-10 h-10 bg-red-50 text-red-600 rounded-xl flex items-center justify-center mb-4">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 002-2H4a2 2 0 00-2 2v14a2 2 0 002 2z"></path></svg>
                </div>
                <h3 class="font-bold text-slate-900 text-base mb-1">Quick & Easy</h3>
                <p class="text-slate-500 text-xs leading-relaxed">Customers scan instantly through their default smartphone browser. No slow app downloads or long account setups.</p>
            </div>

            <div class="bg-white border border-slate-200/80 p-6 rounded-2xl shadow-xs hover:shadow-md transition">
                <div class="w-10 h-10 bg-red-50 text-red-600 rounded-xl flex items-center justify-center mb-4">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path></svg>
                </div>
                <h3 class="font-bold text-slate-900 text-base mb-1">100% Guarded Privacy</h3>
                <p class="text-slate-500 text-xs leading-relaxed">We secure and isolate user details. Customers get a safe experience without facing unwanted marketing spam.</p>
            </div>
        </div>
    </header>

    <!-- PAIN POINTS & SOLUTIONS SECTION -->
    <section class="bg-white py-20 border-y border-slate-200/80">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-2xl mx-auto mb-16">
                <span class="text-xs font-bold text-red-600 uppercase tracking-widest bg-red-50 px-3 py-1 rounded-full">The Reality Check</span>
                <h2 class="text-3xl font-black text-slate-950 mt-3">Why Traditional Stores Lose Valued Customers</h2>
                <p class="text-slate-600 text-sm mt-3 font-medium leading-relaxed">
                    Without a smart system, customers naturally shift to online shopping apps.
                </p>
            </div>
            
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-stretch">
                <!-- Pain Points Box -->
                <div class="bg-rose-50/60 border-2 border-rose-100 rounded-3xl p-6 sm:p-8 flex flex-col justify-between shadow-sm">
                    <div>
                        <div class="flex items-center space-x-3 mb-6">
                            <div class="w-10 h-10 bg-rose-600 text-white rounded-xl flex items-center justify-center font-bold text-lg shadow-sm">✕</div>
                            <h3 class="text-rose-950 font-black text-xl tracking-tight">The Retention Leak</h3>
                        </div>
                        <div class="space-y-6">
                            <div class="bg-white p-4 rounded-xl border border-rose-100 shadow-2xs">
                                <h4 class="font-bold text-rose-900 text-sm flex items-center"><span class="mr-2">⚠️</span> Lost After the Sale</h4>
                                <p class="text-slate-600 text-xs mt-1 leading-relaxed">Most customers buy, pay, and leave, making them completely unreachable tomorrow.</p>
                            </div>
                            <div class="bg-white p-4 rounded-xl border border-rose-100 shadow-2xs">
                                <h4 class="font-bold text-rose-900 text-sm flex items-center"><span class="mr-2">⚠️</span> Profit-Bleeding Discounts</h4>
                                <p class="text-slate-600 text-xs mt-1 leading-relaxed">Displaying flat percentage cuts on checkout counters permanently burns your daily profit margin without driving future curiosity.</p>
                            </div>
                            <div class="bg-white p-4 rounded-xl border border-rose-100 shadow-2xs">
                                <h4 class="font-bold text-rose-900 text-sm flex items-center"><span class="mr-2">⚠️</span> Aggressive App Competition</h4>
                                <p class="text-slate-600 text-xs mt-1 leading-relaxed">Mega online delivery apps use highly aggressive marketing systems to capture your daily offline neighborhood clients away.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Solutions Box -->
                <div class="bg-emerald-50/60 border-2 border-emerald-100 rounded-3xl p-6 sm:p-8 flex flex-col justify-between shadow-sm">
                    <div>
                        <div class="flex items-center space-x-3 mb-6">
                            <div class="w-10 h-10 bg-emerald-600 text-white rounded-xl flex items-center justify-center font-bold text-lg shadow-sm">✓</div>
                            <h3 class="text-emerald-950 font-black text-xl tracking-tight">The LoyaltyQR Solution</h3>
                        </div>
                        <div class="space-y-6">
                            <div class="bg-white p-4 rounded-xl border border-emerald-100 shadow-2xs">
                                <h4 class="font-bold text-emerald-900 text-sm flex items-center"><span class="mr-2">✨</span> Automated Dynamic Retention</h4>
                                <p class="text-slate-600 text-xs mt-1 leading-relaxed">Customers simply scan the QR code at your counter. It opens on their phone, where they can see rewards that encourage them to visit your shop again.</p>
                            </div>
                            <div class="bg-white p-4 rounded-xl border border-emerald-100 shadow-2xs">
                                <h4 class="font-bold text-emerald-900 text-sm flex items-center"><span class="mr-2">✨</span> High-Dopamine Gamification</h4>
                                <p class="text-slate-600 text-xs mt-1 leading-relaxed">Scratch card curiosity mechanics convert regular checkout loops into highly interactive custom reward events that customers genuinely talk about with friends.</p>
                            </div>
                            <div class="bg-white p-4 rounded-xl border border-emerald-100 shadow-2xs">
                                <h4 class="font-bold text-emerald-900 text-sm flex items-center"><span class="mr-2">✨</span> 100% Privacy & Zero Spam</h4>
                                <p class="text-slate-600 text-xs mt-1 leading-relaxed">We protect user data completely. No spam messages. Customers feel completely safe and trust your store's digital ecosystem.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Setup Process -->
    <section class="bg-slate-50 py-20 border-b border-slate-200/60">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-2xl sm:text-3xl font-black text-center text-slate-900 mb-12">Setup in Just 3 Simple Steps</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white border border-slate-200 p-6 rounded-2xl text-center shadow-xs">
                    <div class="w-10 h-10 bg-red-600 text-white font-bold rounded-xl flex items-center justify-center mx-auto mb-4">1</div>
                    <h3 class="font-bold text-lg mb-2 text-slate-900">Register Your Business</h3>
                    <p class="text-slate-600 text-sm">Create your account inside two minutes and activate your live trial block instantly.</p>
                </div>
                <div class="bg-white border border-slate-200 p-6 rounded-2xl text-center shadow-xs">
                    <div class="w-10 h-10 bg-red-600 text-white font-bold rounded-xl flex items-center justify-center mx-auto mb-4">2</div>
                    <h3 class="font-bold text-lg mb-2 text-slate-900">Display Your Shop QR</h3>
                    <p class="text-slate-600 text-sm">Download your custom counter configuration template from the dashboard and print it.</p>
                </div>
                <div class="bg-white border border-slate-200 p-6 rounded-2xl text-center shadow-xs">
                    <div class="w-10 h-10 bg-red-600 text-white font-bold rounded-xl flex items-center justify-center mx-auto mb-4">3</div>
                    <h3 class="font-bold text-lg mb-2 text-slate-900">Watch Customers Return</h3>
                    <p class="text-slate-600 text-sm">Visitors scan to play instant scratch cards, keeping them loyal to your local business brand.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- REDESIGNED PRICING PLANS SECTION (As per image_6173dc.png guidelines) -->
    <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-24 bg-slate-50">
        <div class="text-center max-w-3xl mx-auto mb-16">
            <span class="text-xs font-bold text-red-600 uppercase tracking-widest bg-red-50 px-3 py-1 rounded-full">Fair & Simple Pricing</span>
            <h2 class="text-3xl sm:text-4xl font-black text-slate-950 mt-3 mb-2">Invest in Your Business Growth</h2>
            <p class="text-slate-600 text-sm font-medium">Choose a timeline that works best for your expansion strategy. No hidden charges.</p>
        </div>
        
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 items-stretch max-w-6xl mx-auto">
            
            <!-- Standard Plan -->
            <div class="bg-white border border-slate-200/90 p-8 rounded-3xl shadow-sm hover:shadow-md transition flex flex-col justify-between relative pt-10">
                <div>
                    <h3 class="text-xl font-extrabold text-slate-900 tracking-tight">Standard Plan</h3>
                    
                    <div class="mt-6 mb-6 pb-6 border-b border-slate-100">
                        <!-- Cut Price (Strikethrough) -->
                        <span class="text-sm font-bold text-slate-400 line-through tracking-wide block mb-1">₹36,000</span>
                        <div class="text-3xl font-black text-slate-900 tracking-tight">₹24,000 <span class="text-sm font-medium text-slate-500">/ Year</span></div>
                        <div class="text-emerald-600 text-xs font-bold mt-2.5 flex items-center">
                            <span>✨ Equivalent to ₹2,000/month</span>
                        </div>
                    </div>
                    
                    <ul class="space-y-3.5 text-slate-600 text-sm mb-8">
                        <li class="flex items-start text-xs"><span class="text-emerald-500 font-bold mr-2.5">✓</span> Customer retention system</li>
                        <li class="flex items-start text-xs"><span class="text-emerald-500 font-bold mr-2.5">✓</span> Free account setup</li>
                        <li class="flex items-start text-xs"><span class="text-emerald-500 font-bold mr-2.5">✓</span> QR code</li>
                        <li class="flex items-start text-xs"><span class="text-emerald-500 font-bold mr-2.5">✓</span> Unlimited QR code scans</li>
                        <li class="flex items-start text-xs"><span class="text-slate-400 font-bold mr-2.5">✓</span> Standard Support</li>
                    </ul>
                </div>
                <button onclick="toggleModal('signupModal')" class="w-full bg-slate-900 hover:bg-slate-800 text-white font-bold py-3.5 rounded-xl transition cursor-pointer text-sm tracking-wide shadow-sm">Start 2-Day Trial</button>
            </div>
            
            <!-- Professional Plan (MOST POPULAR HIGHLIGHTED) -->
            <div class="bg-white border-2 border-red-600 p-8 rounded-3xl shadow-xl relative flex flex-col justify-between pt-12 transform lg:-translate-y-2">
                <!-- Highlight Badge -->
                <span class="absolute -top-3.5 left-1/2 -translate-x-1/2 bg-red-600 text-white text-[11px] font-black px-4 py-1 rounded-full uppercase tracking-wider shadow-sm">Most Popular</span>
                
                <div>
                    <h3 class="text-xl font-extrabold text-red-600 tracking-tight">Professional Plan</h3>
                    
                    <div class="mt-6 mb-6 pb-6 border-b border-slate-100">
                        <!-- Cut Price (Strikethrough) -->
                        <span class="text-sm font-bold text-slate-400 line-through tracking-wide block mb-1">₹72,000</span>
                        <div class="text-3xl font-black text-slate-900 tracking-tight">₹49,000 <span class="text-sm font-medium text-slate-500">/ 3 Years</span></div>
                        <div class="text-red-600 text-xs font-bold mt-2.5 flex items-center bg-red-50 px-2 py-1 rounded w-fit">
                            <span>🔥 Only ₹1,361/month</span>
                        </div>
                    </div>
                    
                    <ul class="space-y-3.5 text-slate-600 text-sm mb-8">
                        <li class="flex items-start text-xs"><span class="text-emerald-500 font-bold mr-2.5">✓</span> Customer retention system</li>
                        <li class="flex items-start text-xs"><span class="text-emerald-500 font-bold mr-2.5">✓</span> Free account setup</li>
                        <li class="flex items-start text-xs"><span class="text-emerald-500 font-bold mr-2.5">✓</span> QR code</li>
                        <li class="flex items-start text-xs"><span class="text-emerald-500 font-bold mr-2.5">✓</span> Unlimited QR code scans</li>
                        <li class="flex items-start text-xs font-bold text-slate-900"><span class="text-emerald-500 mr-2.5">✓</span> Priority Support</li>
                        <li class="flex items-start text-xs font-bold text-slate-900"><span class="text-emerald-500 mr-2.5">✓</span> Free Feature Updates</li>
                    </ul>
                </div>
                <button onclick="toggleModal('signupModal')" class="w-full bg-red-600 hover:bg-red-700 text-white font-bold py-3.5 rounded-xl transition shadow-md shadow-red-600/10 cursor-pointer text-sm tracking-wide">Start 2-Day Trial</button>
            </div>

            <!-- Legacy Plan (BEST VALUE HIGHLIGHTED) -->
            <div class="bg-slate-900 border border-slate-800 p-8 rounded-3xl shadow-sm text-white relative flex flex-col justify-between pt-12">
                <!-- Highlight Badge -->
                <span class="absolute -top-3.5 left-1/2 -translate-x-1/2 bg-slate-700 text-amber-400 text-[11px] font-black px-4 py-1 rounded-full uppercase tracking-wider border border-slate-600">Best Value</span>
                
                <div>
                    <h3 class="text-xl font-extrabold text-white tracking-tight">Legacy Plan</h3>
                    
                    <div class="mt-6 mb-6 pb-6 border-b border-slate-800">
                        <!-- Cut Price (Strikethrough) -->
                        <span class="text-sm font-bold text-slate-500 line-through tracking-wide block mb-1">₹1,20,000</span>
                        <div class="text-3xl font-black text-amber-400 tracking-tight">₹75,000</div>
                        <div class="text-slate-300 text-[10px] font-bold uppercase tracking-widest mt-2.5 flex items-center space-x-1.5">
                            <span class="bg-slate-800 px-2 py-0.5 rounded text-emerald-400">One-Time Payment</span>
                            <span class="bg-slate-800 px-2 py-0.5 rounded text-slate-400">No Renewals</span>
                        </div>
                    </div>
                    
                    <ul class="space-y-3.5 text-slate-300 text-sm mb-8">
                        <li class="flex items-start text-xs"><span class="text-amber-400 font-bold mr-2.5">✓</span> Customer retention system</li>
                        <li class="flex items-start text-xs"><span class="text-amber-400 font-bold mr-2.5">✓</span> Free account setup</li>
                        <li class="flex items-start text-xs"><span class="text-amber-400 font-bold mr-2.5">✓</span> QR code</li>
                        <li class="flex items-start text-xs"><span class="text-amber-400 font-bold mr-2.5">✓</span> Unlimited QR code scans</li>
                        <li class="flex items-start text-xs"><span class="text-amber-400 font-bold mr-2.5">✓</span> Free Feature Updates</li>
                        <li class="flex items-start text-xs"><span class="text-amber-400 font-bold mr-2.5">✓</span> Priority Support</li>
                        <li class="flex items-start text-xs font-bold text-white"><span class="text-amber-400 mr-2.5">✓</span> Dedicated Relationship Manager</li>
                        <li class="flex items-start text-xs font-bold text-white"><span class="text-amber-400 mr-2.5">✓</span> All Future Updates</li>
                    </ul>
                </div>
                <button onclick="toggleModal('signupModal')" class="w-full bg-white hover:bg-slate-100 text-slate-900 font-bold py-3.5 rounded-xl transition cursor-pointer text-sm tracking-wide">Start 2-Day Trial</button>
            </div>
            
        </div>
        
        <p class="text-center text-sm text-emerald-600 font-bold mt-12">🎉 Enjoy any plan free for 2 days. No payment required.</p>
    </section>

    <!-- Support and FAQs -->
    <section class="bg-white py-20 border-t border-slate-200/60">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-2xl sm:text-3xl font-black text-center text-slate-900 mb-8">Frequently Asked Questions</h2>
            <div class="space-y-4">
                <div class="bg-slate-50 border border-slate-200 p-5 rounded-xl">
                    <h4 class="font-bold text-slate-900 mb-2">Will my account be automatically charged when the trial ends?</h4>
                    <p class="text-slate-600 text-sm leading-relaxed">Absolutely not. We do not use auto-debit loops. You manually control your extensions from the store dashboard when you see genuine performance value.</p>
                </div>
                <div class="bg-slate-50 border border-slate-200 p-5 rounded-xl">
                    <h4 class="font-bold text-slate-900 mb-2">How is user phone security managed?</h4>
                    <p class="text-slate-600 text-sm leading-relaxed">We focus entirely on isolated cloud data privacy. Customers face zero promotion spam or unprompted advertisements from external systems.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Form -->
    <section class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-20">
        <div class="bg-white border border-slate-200 rounded-2xl p-6 sm:p-10 shadow-sm grid grid-cols-1 md:grid-cols-5 gap-8">
            <div class="md:col-span-2 space-y-4">
                <h3 class="text-2xl font-black text-slate-900">Contact Us</h3>
                <p class="text-slate-500 text-sm leading-relaxed">Have custom workflow questions? Message our tracking activation support desk.</p>
                <div class="text-xs text-slate-600 space-y-1 pt-2">
                    <p>📧 support@loyaltyqr.com</p>
                    <p>📍 Delhi NCR, India</p>
                </div>
            </div>
            <form class="md:col-span-3 space-y-4">
                <div class="grid grid-cols-2 gap-4">
                    <input type="text" placeholder="Your Name" required class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:border-red-600">
                    <input type="text" placeholder="Phone Number" required class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:border-red-600">
                </div>
                <input type="email" placeholder="Email Address" required class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:border-red-600">
                <textarea rows="3" placeholder="Write your message here..." required class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:border-red-600"></textarea>
                <button type="submit" class="w-full bg-slate-900 hover:bg-slate-800 text-white font-bold py-2.5 rounded-xl transition text-sm cursor-pointer">Send Message</button>
            </form>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-slate-900 text-slate-400 text-xs py-12 border-t border-slate-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center space-y-6">
            <div class="flex justify-center space-x-6 font-semibold text-slate-300">
                <button onclick="openLegalModal('Terms & Conditions', 'All merchant operations rules...')" class="hover:text-white cursor-pointer">Terms & Conditions</button>
                <button onclick="openLegalModal('Privacy Policy', 'Data security protocols...')" class="hover:text-white cursor-pointer">Privacy Policy</button>
            </div>
            <p>© 2026 LoyaltyQR Inc. Pure Value-Driven Manual Activation System.</p>
        </div>
    </footer>

    <!-- Modals Interface Blocks -->
    <div id="loginModal" class="modal fixed inset-0 bg-slate-950/60 backdrop-blur-xs z-50 items-center justify-center p-4">
        <div class="bg-white w-full max-w-md rounded-2xl p-8 relative shadow-2xl border border-slate-100">
            <button onclick="toggleModal('loginModal')" class="absolute top-5 right-5 text-slate-400 hover:text-slate-600 text-2xl cursor-pointer">&times;</button>
            <h3 id="loginModalTitle" class="text-xl font-black text-slate-900 mb-1">Portal Login</h3>
            <p id="loginModalSub" class="text-xs text-slate-400 mb-6">Enter your details</p>
            <form class="space-y-4">
                <div>
                    <label class="block text-xs font-bold uppercase text-slate-500 mb-1">Email Address</label>
                    <input type="email" required class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:border-red-600 text-slate-900">
                </div>
                <div>
                    <label class="block text-xs font-bold uppercase text-slate-500 mb-1">Password</label>
                    <input type="password" required class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:border-red-600 text-slate-900">
                </div>
                <button type="submit" class="w-full bg-red-600 hover:bg-red-700 text-white font-bold py-2.5 rounded-xl shadow-md transition mt-2 cursor-pointer text-sm">Secure Sign In</button>
            </form>
        </div>
    </div>

    <div id="signupModal" class="modal fixed inset-0 bg-slate-950/60 backdrop-blur-xs z-50 items-center justify-center p-4">
        <div class="bg-white w-full max-w-md rounded-2xl p-8 relative shadow-2xl border border-slate-100">
            <button onclick="toggleModal('signupModal')" class="absolute top-5 right-5 text-slate-400 hover:text-slate-600 text-2xl cursor-pointer">&times;</button>
            <h3 class="text-xl font-black text-slate-900 mb-1">Create Account</h3>
            <p class="text-xs text-slate-400 mb-6">Enter details to generate your validation code block</p>
            
            <form onsubmit="handleSignupSubmit(event)" class="space-y-4">
                <div>
                    <label class="block text-xs font-bold uppercase text-slate-500 mb-1">Register As</label>
                    <select id="userRole" onchange="toggleMerchantFields()" class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:border-red-600 text-slate-900">
                        <option value="MERCHANT">Store / Merchant Owner</option>
                        <option value="CUSTOMER">Normal User / Customer</option>
                    </select>
                </div>
                <div id="businessNameField">
                    <label class="block text-xs font-bold uppercase text-slate-500 mb-1">Shop / Business Name</label>
                    <input type="text" id="bizName" required class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:border-red-600 text-slate-900">
                </div>
                <div>
                    <label class="block text-xs font-bold uppercase text-slate-500 mb-1">Email ID</label>
                    <input type="email" required class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:border-red-600 text-slate-900">
                </div>
                <div>
                    <label class="block text-xs font-bold uppercase text-slate-500 mb-1">Create Password</label>
                    <input type="password" required class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:border-red-600 text-slate-900">
                </div>
                <button type="submit" class="w-full bg-red-600 hover:bg-red-700 text-white font-bold py-2.5 rounded-xl shadow-md transition mt-2 cursor-pointer text-sm">Activate 2-Day Free Trial</button>
            </form>

            <div id="otpSection" class="hidden mt-6 pt-6 border-t border-slate-100 space-y-4">
                <p class="text-xs text-emerald-600 font-bold text-center">Verification link dispatched to your mail box container.</p>
                <input type="text" maxlength="6" placeholder="******" class="text-center tracking-widest font-mono text-lg w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-2 text-slate-900 focus:outline-none focus:border-emerald-600">
                <button onclick="verifyOTPAndRedirect()" class="w-full bg-emerald-600 hover:bg-emerald-500 text-white font-bold py-2.5 rounded-xl shadow-md transition cursor-pointer text-sm">Verify Details</button>
            </div>
        </div>
    </div>

    <div id="legalModal" class="modal fixed inset-0 bg-slate-950/60 backdrop-blur-xs z-50 items-center justify-center p-4">
        <div class="bg-white w-full max-w-2xl rounded-2xl p-8 relative shadow-2xl flex flex-col justify-between">
            <div>
                <button onclick="toggleModal('legalModal')" class="absolute top-5 right-5 text-slate-400 hover:text-slate-600 text-2xl cursor-pointer">&times;</button>
                <h3 id="legalModalTitle" class="text-xl font-black text-slate-900 mb-4">Legal Document</h3>
                <div id="legalModalContent" class="text-slate-600 text-sm overflow-y-auto max-h-[50vh] pr-2">System parameters text details configuration blocks.</div>
            </div>
            <button onclick="toggleModal('legalModal')" class="w-full bg-slate-900 hover:bg-slate-800 text-white font-bold py-2.5 rounded-xl mt-6 cursor-pointer text-sm">Close</button>
        </div>
    </div>

    <script>
        function toggleModal(id) {
            document.getElementById(id).classList.toggle('active');
        }

        function openLoginModal(type) {
            const title = document.getElementById('loginModalTitle');
            const sub = document.getElementById('loginModalSub');
            if(type === 'MERCHANT') {
                title.innerText = "Merchant Store Login";
                sub.innerText = "Access your performance reports panel configuration dashboard";
            } else {
                title.innerText = "Customer Rewards Login";
                sub.innerText = "Check your collected safe scratch cards activation records";
            }
            document.getElementById('loginModal').classList.add('active');
        }

        function toggleMerchantFields() {
            const role = document.getElementById('userRole').value;
            const field = document.getElementById('businessNameField');
            const input = document.getElementById('bizName');
            if(role === 'MERCHANT') {
                field.classList.remove('hidden');
                input.required = true;
            } else {
                field.classList.add('hidden');
                input.required = false;
            }
        }

        function handleSignupSubmit(e) {
            e.preventDefault();
            document.getElementById('otpSection').classList.remove('hidden');
        }

        function verifyOTPAndRedirect() {
            const role = document.getElementById('userRole').value;
            toggleModal('signupModal');
            if(role === 'MERCHANT') {
                alert("Account created successfully! Redirecting you into your secure performance panel system dashboard...");
            } else {
                alert("Welcome inside your protected privacy rewards profile locker space.");
            }
        }

        function openLegalModal(title, defaultContent) {
            document.getElementById('legalModalTitle').innerText = title;
            document.getElementById('legalModalContent').innerText = defaultContent + "\n\n(This field dynamically tracks legal definitions requirements settings.)";
            toggleModal('legalModal');
        }
    </script>
</body>
</html>
