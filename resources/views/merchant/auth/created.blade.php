<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account Created - BeAurex</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; }
    </style>
</head>
<body class="bg-emerald-50 text-slate-800 min-h-screen flex">

    <!-- Confetti Background Layer -->
    <div class="fixed inset-0 pointer-events-none overflow-hidden z-0">
        <div class="absolute top-1/4 left-1/4 w-3 h-3 bg-red-400 rounded-sm rotate-45 opacity-60"></div>
        <div class="absolute top-1/3 right-1/3 w-4 h-4 bg-emerald-400 rounded-full opacity-60"></div>
        <div class="absolute bottom-1/3 left-1/3 w-3 h-3 bg-blue-400 rounded-full opacity-60"></div>
        <div class="absolute top-1/2 right-1/4 w-2 h-2 bg-yellow-400 rounded-sm rotate-12 opacity-60"></div>
        <div class="absolute top-20 right-20 w-3 h-3 bg-purple-400 rounded-sm rotate-45 opacity-60 hidden lg:block"></div>
        <div class="absolute bottom-20 left-20 w-4 h-4 bg-orange-400 rounded-full opacity-60 hidden lg:block"></div>
    </div>

    <!-- Left Side: Full Layout Branding (Hidden on Mobile) -->
    <div class="hidden lg:flex lg:w-1/2 bg-emerald-600 flex-col items-center justify-center relative overflow-hidden text-center px-12 z-10">
        <div class="absolute top-0 left-0 w-full h-1/2 bg-gradient-to-b from-emerald-800/50 to-transparent"></div>
        <div class="absolute bottom-0 right-0 w-[800px] h-[800px] bg-emerald-950/20 rounded-full blur-3xl translate-x-1/3 translate-y-1/3"></div>

        <div class="relative z-10 w-full max-w-lg">
            <div class="w-24 h-24 bg-white rounded-3xl flex items-center justify-center shadow-2xl mx-auto mb-10 transform rotate-6">
                <svg class="w-12 h-12 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path></svg>
            </div>
            
            <h1 class="text-5xl font-black text-white mb-6 leading-tight">Welcome to the Platform</h1>
            <p class="text-xl text-emerald-100 font-medium leading-relaxed mb-16">You're now fully verified. Let's start rewarding your best customers and growing your revenue today.</p>

            <div class="flex justify-center">
                <div class="bg-white/10 p-6 rounded-3xl backdrop-blur-md border border-white/20 shadow-2xl flex items-center space-x-4">
                    <div class="w-16 h-16 bg-white rounded-2xl flex items-center justify-center text-[#900000]">
                        <svg class="w-8 h-8" viewBox="0 0 24 24" fill="currentColor"><path d="M4 6h16v2H4zm2 4h12v10H6zm3 2v6h6v-6zM3 4h18v2H3z"/></svg>
                    </div>
                    <div class="text-left">
                        <div class="text-white font-black text-xl">BeAurex Merchant</div>
                        <div class="text-emerald-200 font-medium text-sm">Dashboard Ready</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Right Side: The Form/Success Message -->
    <div class="w-full lg:w-1/2 flex items-center justify-center p-8 bg-transparent lg:bg-white/90 lg:backdrop-blur-sm z-10">
        
        <div class="w-full max-w-md bg-white p-8 lg:p-0 rounded-3xl shadow-xl lg:shadow-none border border-emerald-100 lg:border-none mt-12 lg:mt-0 text-center lg:text-left">
            
            <div class="flex justify-center lg:justify-start mb-8">
                <div class="w-24 h-24 bg-emerald-500 rounded-full flex items-center justify-center text-white shadow-xl border-8 border-emerald-50 transform scale-110 lg:scale-100">
                    <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path></svg>
                </div>
            </div>

            <div class="mb-10">
                <h2 class="text-4xl font-black text-slate-900 mb-3 leading-tight">Account Created Successfully!</h2>
                <p class="text-slate-500 font-medium text-lg">Your merchant account has been created and securely verified.</p>
            </div>

            <div class="bg-slate-50 rounded-2xl p-6 border border-slate-100 mb-10 text-center lg:text-left flex flex-col lg:flex-row items-center lg:space-x-4">
                <div class="flex justify-center mb-4 lg:mb-0 text-slate-700 bg-white p-3 rounded-xl shadow-sm border border-slate-200">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 21v-7.5a.75.75 0 01.75-.75h3a.75.75 0 01.75.75V21m-4.5 0H2.36m11.14 0H18m0 0h3.64m-1.39 0V9.349m-16.5 11.65V9.35m0 0a3.001 3.001 0 003.75-.615A2.993 2.993 0 009.75 9.75c.896 0 1.7-.393 2.25-1.016a2.993 2.993 0 002.25 1.016c.896 0 1.7-.393 2.25-1.016a3.001 3.001 0 003.75.614m-16.5 0a3.004 3.004 0 01-.621-4.72L4.318 3.44A1.5 1.5 0 015.378 3h13.243a1.5 1.5 0 011.06.44l1.19 1.189a3 3 0 01-.621 4.72m-13.5 8.65h3.75a.75.75 0 00.75-.75V13.5a.75.75 0 00-.75-.75H6.75a.75.75 0 00-.75.75v3.75c0 .415.336.75.75.75z"></path></svg>
                </div>
                <div>
                    <p class="text-sm font-bold text-slate-800 leading-relaxed">You're all set to grow your business with BeAurex!</p>
                </div>
            </div>

            <form action="/merchant/login" method="POST">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" name="email" value="business@email.com">
                <input type="hidden" name="password" value="auto">
                <button type="submit" class="w-full bg-[#900000] hover:bg-[#7a0000] text-white font-bold py-4 rounded-xl shadow-md transition text-center text-lg flex justify-center items-center space-x-2">
                    <span>Continue to Dashboard</span>
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                </button>
            </form>
            
        </div>
    </div>

</body>
</html>
