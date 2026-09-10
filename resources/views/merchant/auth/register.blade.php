<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Account - BeAurex</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; }
    </style>
</head>
<body class="bg-white text-slate-800 min-h-screen flex">

    <!-- Left Side: Full Layout Branding (Hidden on Mobile) -->
    <div class="hidden lg:flex lg:w-1/2 bg-[#900000] flex-col items-center justify-center relative overflow-hidden text-center px-12">
        <div class="absolute top-0 left-0 w-full h-1/2 bg-gradient-to-b from-red-800/50 to-transparent"></div>
        <div class="absolute bottom-0 right-0 w-[800px] h-[800px] bg-red-950/20 rounded-full blur-3xl translate-x-1/3 translate-y-1/3"></div>

        <div class="relative z-10 w-full max-w-lg">
            <div class="w-24 h-24 bg-white rounded-3xl flex items-center justify-center shadow-2xl mx-auto mb-10 transform -rotate-6">
                <svg class="w-12 h-12 text-[#900000]" viewBox="0 0 24 24" fill="currentColor"><path d="M4 6h16v2H4zm2 4h12v10H6zm3 2v6h6v-6zM3 4h18v2H3z"/></svg>
            </div>
            
            <h1 class="text-5xl font-black text-white mb-6 leading-tight">Join BeAurex Today</h1>
            <p class="text-xl text-red-100 font-medium leading-relaxed mb-16">Create your business account in minutes. No credit card required to start growing your repeat customer base.</p>

            <div class="flex justify-center">
                <div class="relative">
                    <div class="w-48 h-48 bg-white/10 backdrop-blur-md rounded-full absolute -top-8 -left-8 scale-110 -z-10 border border-white/20"></div>
                    <svg class="w-40 h-40 text-white shadow-2xl drop-shadow-2xl" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M15 45V85C15 87.7614 17.2386 90 20 90H80C82.7614 90 85 87.7614 85 85V45" fill="#ffffff"/>
                        <path d="M40 90V65C40 62.2386 42.2386 60 45 60H55C57.7614 60 60 62.2386 60 65V90" fill="#fecaca"/>
                        <path d="M10 45C10 45 15 35 20 35H80C85 35 90 45 90 45V50C90 52.7614 87.7614 55 85 55C82.2386 55 80 52.7614 80 50C80 52.7614 77.7614 55 75 55C72.2386 55 70 52.7614 70 50C70 52.7614 67.7614 55 65 55C62.2386 55 60 52.7614 60 50C60 52.7614 57.7614 55 55 55C52.2386 55 50 52.7614 50 50C50 52.7614 47.7614 55 45 55C42.2386 55 40 52.7614 40 50C40 52.7614 37.7614 55 35 55C32.2386 55 30 52.7614 30 50C30 52.7614 27.7614 55 25 55C22.2386 55 20 52.7614 20 50C20 52.7614 17.7614 55 15 55C12.2386 55 10 52.7614 10 50V45Z" fill="#ffbaba"/>
                        <path d="M25 35L30 15C30.5523 12.7909 32.5523 10 35 10H65C67.4477 10 69.4477 12.7909 70 15L75 35" fill="#fca5a5"/>
                        <rect x="25" y="65" width="10" height="15" rx="2" fill="#fecaca"/>
                        <rect x="65" y="65" width="10" height="15" rx="2" fill="#fecaca"/>
                    </svg>
                </div>
            </div>
        </div>
    </div>

    <!-- Right Side: The Form -->
    <div class="w-full lg:w-1/2 flex items-center justify-center p-8 bg-slate-50 lg:bg-white relative">
        <a href="/merchant/login" class="absolute top-8 left-8 text-slate-400 hover:text-slate-900 transition flex items-center space-x-2 font-bold">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
            <span class="hidden sm:inline">Back</span>
        </a>

        <div class="w-full max-w-md bg-white p-8 lg:p-0 rounded-3xl shadow-xl lg:shadow-none border lg:border-none border-slate-100 mt-12 lg:mt-0">
            
            <div class="flex justify-center lg:justify-start mb-8">
                <div class="w-20 h-20 bg-red-50 rounded-full flex items-center justify-center text-red-400 shadow-inner">
                    <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path></svg>
                </div>
            </div>

            <div class="text-center lg:text-left mb-10">
                <h2 class="text-3xl font-black text-slate-900 mb-2">Create Account</h2>
                <p class="text-slate-500 font-medium text-lg">Let's get your business account set up</p>
            </div>

            <form action="/merchant/register" method="POST" class="space-y-6">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div>
                    <label class="block text-sm font-bold text-slate-700 mb-2">Owner Name</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                            <svg class="w-5 h-5 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                        </div>
                        <input type="text" name="name" placeholder="John Doe" required class="w-full bg-slate-50 border border-slate-200 rounded-xl pl-12 pr-4 py-3.5 focus:outline-none focus:ring-2 focus:ring-[#900000]/20 focus:border-[#900000] font-semibold text-slate-900 text-sm transition">
                    </div>
                </div>

                <div>
                    <label class="block text-sm font-bold text-slate-700 mb-2">Business Email</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                            <svg class="w-5 h-5 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                        </div>
                        <input type="email" name="email" placeholder="business@example.com" required class="w-full bg-slate-50 border border-slate-200 rounded-xl pl-12 pr-4 py-3.5 focus:outline-none focus:ring-2 focus:ring-[#900000]/20 focus:border-[#900000] font-semibold text-slate-900 text-sm transition">
                    </div>
                </div>

                <div>
                    <label class="block text-sm font-bold text-slate-700 mb-2">Contact Number</label>
                    <div class="flex">
                        <div class="bg-slate-50 border border-slate-200 border-r-0 rounded-l-xl px-4 py-3.5 flex items-center justify-center font-bold text-slate-700 text-sm">
                            🇮🇳 +91
                        </div>
                        <input type="tel" name="phone" placeholder="98765 43210" required class="w-full bg-slate-50 border border-slate-200 rounded-r-xl px-4 py-3.5 focus:outline-none focus:ring-2 focus:ring-[#900000]/20 focus:border-[#900000] font-semibold text-slate-900 text-sm transition">
                    </div>
                </div>

                <div class="pt-6">
                    <button type="submit" class="w-full bg-[#900000] hover:bg-[#7a0000] text-white font-bold py-4 rounded-xl shadow-md transition text-center text-lg">
                        Continue to Verify
                    </button>
                </div>
            </form>

            <div class="mt-10 text-center lg:text-left">
                <span class="text-sm font-semibold text-slate-500">Already have an account? </span>
                <a href="/merchant/login" class="text-sm font-black text-[#900000] hover:underline">Login instead</a>
            </div>
            
        </div>
    </div>

</body>
</html>
