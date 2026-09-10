<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Merchant Login - BeAurex</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; }
    </style>
</head>
<body class="bg-white text-slate-800 min-h-screen flex">

    <!-- Left Side: Full Layout Branding (Hidden on Mobile) -->
    <div class="hidden lg:flex lg:w-1/2 bg-[#900000] flex-col items-center justify-center relative overflow-hidden text-center px-12">
        
        <!-- Decorative Background Wave -->
        <div class="absolute top-0 left-0 w-full h-1/2 bg-gradient-to-b from-red-800/50 to-transparent"></div>
        <div class="absolute bottom-0 right-0 w-[800px] h-[800px] bg-red-950/20 rounded-full blur-3xl translate-x-1/3 translate-y-1/3"></div>

        <div class="relative z-10 w-full max-w-lg">
            <div class="w-24 h-24 bg-white rounded-3xl flex items-center justify-center shadow-2xl mx-auto mb-10 transform -rotate-6">
                <svg class="w-12 h-12 text-[#900000]" viewBox="0 0 24 24" fill="currentColor"><path d="M4 6h16v2H4zm2 4h12v10H6zm3 2v6h6v-6zM3 4h18v2H3z"/></svg>
            </div>
            
            <h1 class="text-5xl font-black text-white mb-6 leading-tight">BeAurex Merchant App</h1>
            <p class="text-xl text-red-100 font-medium leading-relaxed mb-16">Turn every visit into a repeat customer. Set up your business profile and start rewarding loyalty today.</p>

            <div class="flex justify-center">
                <!-- Large Storefront Illustration -->
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
    <div class="w-full lg:w-1/2 flex items-center justify-center p-8 bg-slate-50 lg:bg-white">
        <div class="w-full max-w-md bg-white p-8 lg:p-0 rounded-3xl shadow-xl lg:shadow-none border lg:border-none border-slate-100">
            
            <!-- Mobile Logo (Shows only on small screens) -->
            <div class="lg:hidden flex items-center space-x-2 mb-10 text-slate-900 justify-center">
                <div class="w-10 h-10 bg-[#900000] rounded-xl flex items-center justify-center p-2 shadow-sm">
                    <svg class="w-full h-full text-white" viewBox="0 0 24 24" fill="currentColor"><path d="M4 6h16v2H4zm2 4h12v10H6zm3 2v6h6v-6zM3 4h18v2H3z"/></svg>
                </div>
                <div class="font-black text-xl tracking-wide">BeAurex Merchant</div>
            </div>

            <div class="text-center lg:text-left mb-10">
                <h2 class="text-3xl font-black text-slate-900 mb-2">Welcome Back!</h2>
                <p class="text-slate-500 font-medium">Login to manage your loyalty program</p>
            </div>

            <!-- Login Form -->
            <form action="/merchant/login" method="POST" class="space-y-5">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

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
                    <label class="block text-sm font-bold text-slate-700 mb-2">Password</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                            <svg class="w-5 h-5 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path></svg>
                        </div>
                        <input type="password" name="password" placeholder="••••••••" required class="w-full bg-slate-50 border border-slate-200 rounded-xl pl-12 pr-12 py-3.5 focus:outline-none focus:ring-2 focus:ring-[#900000]/20 focus:border-[#900000] font-semibold text-slate-900 text-sm transition">
                        <div class="absolute inset-y-0 right-0 pr-4 flex items-center cursor-pointer">
                            <svg class="w-5 h-5 text-slate-400 hover:text-slate-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path></svg>
                        </div>
                    </div>
                </div>

                <div class="flex items-center justify-between pt-1">
                    <label class="flex items-center space-x-2 cursor-pointer">
                        <input type="checkbox" class="w-4 h-4 rounded border-slate-300 text-[#900000] focus:ring-[#900000]">
                        <span class="text-sm font-bold text-slate-600">Remember me</span>
                    </label>
                    <a href="#" class="text-sm font-black text-[#900000] hover:text-[#7a0000]">Forgot Password?</a>
                </div>

                <div class="pt-6 space-y-4">
                    <button type="submit" class="w-full bg-[#900000] hover:bg-[#7a0000] text-white font-bold py-4 rounded-xl shadow-md transition text-center text-lg">
                        Login to Dashboard
                    </button>
                    
                    <div class="relative flex py-2 items-center">
                        <div class="flex-grow border-t border-slate-200"></div>
                        <span class="flex-shrink-0 mx-4 text-xs font-bold text-slate-400 uppercase tracking-widest">or</span>
                        <div class="flex-grow border-t border-slate-200"></div>
                    </div>
                    
                    <button type="button" class="w-full bg-white border-2 border-slate-200 hover:border-slate-300 hover:bg-slate-50 shadow-sm text-slate-700 font-bold py-4 rounded-xl transition text-center flex justify-center items-center space-x-3 text-base">
                        <svg class="w-5 h-5" viewBox="0 0 24 24"><path fill="#4285F4" d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z"/><path fill="#34A853" d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z"/><path fill="#FBBC05" d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z"/><path fill="#EA4335" d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z"/></svg>
                        <span>Continue with Google</span>
                    </button>
                </div>
            </form>

            <div class="mt-10 text-center lg:text-left">
                <span class="text-sm font-semibold text-slate-500">New to BeAurex? </span>
                <a href="/merchant/register" class="text-sm font-black text-[#900000] hover:underline">Create Business Account</a>
            </div>
            
        </div>
    </div>

</body>
</html>
