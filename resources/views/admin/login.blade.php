<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BeAurex Admin Panel - Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; }
    </style>
    <link rel="icon" type="image/jpeg" href="/favicon.jpg">
</head>
<body class="bg-slate-50 text-slate-800 antialiased min-h-screen flex items-center justify-center p-4 sm:p-8">

    <div class="max-w-6xl w-full bg-white rounded-2xl shadow-2xl overflow-hidden flex flex-col md:flex-row min-h-[600px] border border-slate-100">
        
        <!-- Left Sidebar (Red Brand Area) -->
        <div class="md:w-5/12 bg-gradient-to-br from-[#c90000] to-[#8a0000] text-white p-10 flex flex-col relative overflow-hidden">
            <!-- Background Pattern overlay -->
            <div class="absolute inset-0 opacity-10" style="background-image: radial-gradient(#fff 1px, transparent 1px); background-size: 20px 20px;"></div>
            
            <div class="relative z-10 flex-1 flex flex-col">
                <!-- Logo area -->
                <div class="flex items-center space-x-3 mb-16">
                    <div class="w-12 h-12 bg-white rounded-xl flex items-center justify-center">
                        <!-- Custom QR Logo SVG placeholder based on design -->
                        <svg class="w-8 h-8 text-[#c90000]" fill="currentColor" viewBox="0 0 24 24"><path d="M4 4h4v4H4V4zm6 0h4v4h-4V4zm6 0h4v4h-4V4zM4 10h4v4H4v-4zm12 0h4v4h-4v-4zM4 16h4v4H4v-4zm6 0h4v4h-4v-4zm6 0h4v4h-4v-4zm-6-6h4v4h-4v-4z"/></svg>
                    </div>
                    <div>
                        <div class="text-2xl font-black leading-tight tracking-tight">BeAurex</div>
                        <div class="text-sm font-medium text-red-100">Admin Panel</div>
                    </div>
                </div>

                <div>
                    <h1 class="text-4xl font-bold mb-4">Welcome Back!</h1>
                    <p class="text-red-100 mb-12 max-w-sm text-sm leading-relaxed">
                        Sign in to your BeAurex Admin Panel and manage your entire platform.
                    </p>

                    <div class="space-y-8">
                        <!-- Feature 1 -->
                        <div class="flex items-start space-x-4">
                            <div class="w-8 h-8 rounded-full bg-white text-[#c90000] flex items-center justify-center flex-shrink-0 mt-0.5">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
                            </div>
                            <div>
                                <h3 class="font-bold text-white mb-1 text-sm">Secure & Reliable</h3>
                                <p class="text-xs text-red-100 leading-relaxed font-medium">Enterprise-grade security to keep your data safe and protected.</p>
                            </div>
                        </div>

                        <!-- Feature 2 -->
                        <div class="flex items-start space-x-4">
                            <div class="w-8 h-8 rounded-full bg-white text-[#c90000] flex items-center justify-center flex-shrink-0 mt-0.5">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path></svg>
                            </div>
                            <div>
                                <h3 class="font-bold text-white mb-1 text-sm">Real-time Insights</h3>
                                <p class="text-xs text-red-100 leading-relaxed font-medium">Track platform performance and growth in real-time.</p>
                            </div>
                        </div>

                        <!-- Feature 3 -->
                        <div class="flex items-start space-x-4">
                            <div class="w-8 h-8 rounded-full bg-white text-[#c90000] flex items-center justify-center flex-shrink-0 mt-0.5">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
                            </div>
                            <div>
                                <h3 class="font-bold text-white mb-1 text-sm">Complete Control</h3>
                                <p class="text-xs text-red-100 leading-relaxed font-medium">Manage merchants, customers, plans, rewards, claims and more.</p>
                            </div>
                        </div>
                        
                        <!-- Feature 4 -->
                        <div class="flex items-start space-x-4">
                            <div class="w-8 h-8 rounded-full bg-white text-[#c90000] flex items-center justify-center flex-shrink-0 mt-0.5">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                            </div>
                            <div>
                                <h3 class="font-bold text-white mb-1 text-sm">Always Accessible</h3>
                                <p class="text-xs text-red-100 leading-relaxed font-medium">Access your dashboard anytime, anywhere with secure login.</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="mt-auto pt-10">
                    <p class="text-xs text-red-200">&copy; 2025 BeAurex. All rights reserved.</p>
                </div>
            </div>
        </div>

        <!-- Right Login Area -->
        <div class="md:w-7/12 p-10 lg:p-16 flex flex-col justify-center bg-white relative">
            
            <div class="max-w-md w-full mx-auto">
                <!-- Mobile Logo (hidden on desktop) -->
                <div class="md:hidden flex items-center justify-center space-x-3 mb-10">
                    <img src="/images/logo.jpg" alt="BeAurex Logo" class="w-10 h-10 rounded-xl shadow-lg object-cover">
                    <div class="text-center">
                        <div class="text-2xl font-black text-slate-900 leading-tight tracking-tight">BeAurex</div>
                        <div class="text-xs font-medium text-slate-500">Admin Panel</div>
                    </div>
                </div>

                <!-- Desktop centered logo area -->
                <div class="hidden md:flex flex-col items-center justify-center mb-10">
                    <div class="flex items-center space-x-3">
                        <img src="/images/logo.jpg" alt="BeAurex Logo" class="w-12 h-12 rounded-xl shadow-lg object-cover">
                        <div>
                            <div class="text-2xl font-black text-slate-900 leading-tight tracking-tight">BeAurex</div>
                            <div class="text-sm font-medium text-slate-500">Admin Panel</div>
                        </div>
                    </div>
                </div>

                <div class="text-center mb-10">
                    <h2 class="text-2xl font-bold text-slate-900 mb-2">Sign in to your account</h2>
                    <p class="text-sm text-slate-500 font-medium">Enter your credentials to continue</p>
                </div>

                <form action="#" method="POST" class="space-y-5">
                    @csrf
                    
                    <!-- Email -->
                    <div>
                        <label for="email" class="block text-xs font-bold text-slate-700 mb-1.5">Email Address</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none">
                                <svg class="h-5 w-5 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75"></path></svg>
                            </div>
                            <input type="email" id="email" name="email" class="w-full pl-10 pr-4 py-3 rounded-lg border border-slate-300 focus:outline-none focus:ring-1 focus:ring-[#c90000] focus:border-[#c90000] transition text-sm text-slate-900" placeholder="Enter your email address" required>
                        </div>
                    </div>

                    <!-- Mobile -->
                    <div>
                        <label for="mobile" class="block text-xs font-bold text-slate-700 mb-1.5">Mobile Number</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none">
                                <svg class="h-5 w-5 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M10.5 1.5H8.25A2.25 2.25 0 006 3.75v16.5a2.25 2.25 0 002.25 2.25h7.5A2.25 2.25 0 0018 20.25V3.75a2.25 2.25 0 00-2.25-2.25H13.5m-3 0V3h3V1.5m-3 0h3m-3 18.75h3"></path></svg>
                            </div>
                            <input type="tel" id="mobile" name="mobile" class="w-full pl-10 pr-4 py-3 rounded-lg border border-slate-300 focus:outline-none focus:ring-1 focus:ring-[#c90000] focus:border-[#c90000] transition text-sm text-slate-900" placeholder="Enter your mobile number" required>
                        </div>
                    </div>

                    <!-- Password -->
                    <div>
                        <label for="password" class="block text-xs font-bold text-slate-700 mb-1.5">Password</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none">
                                <svg class="h-5 w-5 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z"></path></svg>
                            </div>
                            <input type="password" id="password" name="password" class="w-full pl-10 pr-10 py-3 rounded-lg border border-slate-300 focus:outline-none focus:ring-1 focus:ring-[#c90000] focus:border-[#c90000] transition text-sm text-slate-900" placeholder="Enter your password" required>
                            <div class="absolute inset-y-0 right-0 pr-3.5 flex items-center cursor-pointer">
                                <svg class="h-5 w-5 text-slate-400 hover:text-slate-600 transition" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z"></path><path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                            </div>
                        </div>
                    </div>

                    <!-- Remember & Forgot -->
                    <div class="flex items-center justify-between pt-1">
                        <div class="flex items-center">
                            <input type="checkbox" id="remember" name="remember" class="w-4 h-4 text-[#c90000] border-slate-300 rounded focus:ring-[#c90000]">
                            <label for="remember" class="ml-2 block text-xs font-bold text-slate-700">Remember me</label>
                        </div>
                        <a href="#" class="text-xs font-bold text-[#c90000] hover:text-[#a00000] transition">Forgot Password?</a>
                    </div>

                    <!-- Login Button -->
                    <button type="submit" class="w-full bg-[#cc0000] hover:bg-[#a30000] text-white font-bold py-3.5 rounded-lg transition text-sm mt-4 flex items-center justify-center space-x-2 shadow-sm">
                        <span>Login</span>
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                    </button>
                    
                    <!-- Divider -->
                    <div class="relative flex py-2 items-center">
                        <div class="flex-grow border-t border-slate-200"></div>
                        <span class="flex-shrink-0 mx-4 text-slate-400 text-xs">or</span>
                        <div class="flex-grow border-t border-slate-200"></div>
                    </div>

                    <!-- Secure Access Button -->
                    <button type="button" class="w-full bg-white hover:bg-slate-50 border border-slate-200 text-[#cc0000] font-bold py-3.5 rounded-lg transition text-sm flex items-center justify-center space-x-2">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
                        <span>Secure Admin Access</span>
                    </button>
                    
                    <div class="text-center mt-6">
                        <p class="text-xs text-slate-500">By logging in, you agree to our <a href="#" class="text-[#c90000] hover:underline">Terms & Conditions</a> and <a href="#" class="text-[#c90000] hover:underline">Privacy Policy</a>.</p>
                    </div>

                </form>
            </div>
        </div>

    </div>

</body>
</html>
