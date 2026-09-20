<?php

$file = 'resources/views/admin/login.blade.php';

$html = '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BeAurex Admin Panel - Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="icon" type="image/jpeg" href="/favicon.jpg">
    <style>
        body { font-family: "Inter", sans-serif; }
        input:focus, select:focus { outline: none; border-color: #b00000; box-shadow: 0 0 0 3px rgba(176,0,0,0.08); }
    </style>
</head>
<body class="bg-[#f1f5f9] text-[#0f172a] antialiased min-h-screen flex flex-col items-center justify-center p-4">
    <div class="w-full max-w-sm">
        <div class="bg-white rounded-2xl border border-[#e2e8f0] shadow-sm p-8">
            <!-- Heading -->
            <div class="text-center mb-7">
                <h2 class="text-2xl font-black text-[#0f172a] mb-1.5">BeAurex</h2>
                <p class="text-[#475569] text-sm font-medium leading-relaxed">Admin Panel</p>
            </div>

            <!-- Alerts -->
            @if(session(\'status\'))
            <div class="mb-5 bg-emerald-50 border border-emerald-200 rounded-xl p-3.5 flex items-start space-x-2.5">
                <svg class="w-4 h-4 text-[#22C55E] shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path></svg>
                <p class="text-sm text-emerald-700 font-medium">{{ session(\'status\') }}</p>
            </div>
            @endif
            @if($errors->any())
            <div class="mb-5 bg-red-50 border border-red-200 rounded-xl p-3.5 flex items-start space-x-2.5">
                <svg class="w-4 h-4 text-[#EF4444] shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                <p class="text-sm text-[#8a0000] font-medium">{{ $errors->first() }}</p>
            </div>
            @endif

            <div class="mb-5">
                <p class="text-lg font-bold text-center text-[#0f172a]">Sign in to your account</p>
                <p class="text-xs font-medium text-slate-500 text-center mt-1">Enter your credentials to continue</p>
            </div>

            <!-- Login Form -->
            <form action="{{ url(\'/admin/login\') }}" method="POST" class="space-y-4">
                @csrf

                <!-- Email Address -->
                <div>
                    <label class="block text-xs font-semibold text-[#475569] mb-1">Email Address</label>
                    <input
                        type="email"
                        name="email"
                        value="{{ old(\'email\') }}"
                        placeholder="Enter your email"
                        required
                        class="w-full bg-white border border-[#e2e8f0] rounded-xl px-3.5 py-2.5 text-sm font-medium text-[#0f172a] placeholder-slate-400 transition focus:outline-none focus:border-[#b00000]"
                    >
                </div>

                <!-- Mobile Number -->
                <div>
                    <label class="block text-xs font-semibold text-[#475569] mb-1">Mobile Number</label>
                    <input
                        type="text"
                        name="mobile"
                        value="{{ old(\'mobile\') }}"
                        placeholder="Enter your mobile"
                        class="w-full bg-white border border-[#e2e8f0] rounded-xl px-3.5 py-2.5 text-sm font-medium text-[#0f172a] placeholder-slate-400 transition focus:outline-none focus:border-[#b00000]"
                    >
                </div>

                <!-- Password -->
                <div>
                    <label class="block text-xs font-semibold text-[#475569] mb-1">Password</label>
                    <input
                        type="password"
                        name="password"
                        placeholder="••••••••"
                        required
                        class="w-full bg-white border border-[#e2e8f0] rounded-xl px-3.5 py-2.5 text-sm font-medium text-[#0f172a] placeholder-slate-400 transition focus:outline-none focus:border-[#b00000]"
                    >
                </div>

                <!-- Remember Me & Forgot Password -->
                <div class="flex items-center justify-between pt-1">
                    <label class="flex items-center space-x-2 cursor-pointer">
                        <input type="checkbox" name="remember" class="w-3.5 h-3.5 rounded border-[#e2e8f0] focus:ring-0" style="accent-color:#b00000">
                        <span class="text-xs font-medium text-[#475569]">Remember me</span>
                    </label>
                    <a href="/forgot-password" class="text-xs font-bold text-[#b00000] hover:underline">Forgot Password?</a>
                </div>

                <!-- Login Button -->
                <div class="pt-2">
                    <button
                        type="submit"
                        class="w-full text-white font-bold py-3.5 rounded-xl text-sm transition"
                        style="background:#b00000"
                        onmouseover="this.style.background=\'#8a0000\'"
                        onmouseout="this.style.background=\'#b00000\'"
                    >
                        Login
                    </button>
                </div>
            </form>

            <!-- Or divider -->
            <div class="flex items-center my-5">
                <div class="flex-1 border-t border-[#e2e8f0]"></div>
                <span class="px-3 text-xs font-semibold text-slate-400">or</span>
                <div class="flex-1 border-t border-[#e2e8f0]"></div>
            </div>

            <!-- Footer terms -->
            <div class="text-center">
                <p class="text-sm font-bold text-slate-700 mb-1">Secure Admin Access</p>
                <p class="text-xs font-medium text-slate-500">By logging in, you agree to our <a href="/admin#" class="text-[#b00000] hover:underline font-bold">Terms & Conditions</a> and <a href="/admin#" class="text-[#b00000] hover:underline font-bold">Privacy Policy</a>.</p>
            </div>

        </div>
    </div>
</body>
</html>';

file_put_contents($file, $html);
echo "Cleaned admin login successfully!\n";
