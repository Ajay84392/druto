<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verify OTP - BeAurex</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background-color: #f8fafc;
        }
        .mobile-container {
            max-width: 414px;
            margin: 0 auto;
            background-color: #ffffff;
            min-height: 100vh;
            position: relative;
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
        }
        @media (max-width: 414px) {
            .mobile-container { box-shadow: none; }
        }
        /* Hide arrows on number input */
        input[type=number]::-webkit-inner-spin-button, 
        input[type=number]::-webkit-outer-spin-button { 
            -webkit-appearance: none; 
            margin: 0; 
        }
    </style>
</head>
<body class="antialiased text-slate-800 flex items-center justify-center min-h-screen">

    <div class="mobile-container w-full flex flex-col p-8 pt-12">
        
        <!-- Top Nav -->
        <a href="/forgot-password" class="text-slate-900 hover:text-slate-600 transition inline-block mb-10">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
        </a>

        <!-- Illustration -->
        <div class="flex justify-center mb-8 relative">
            <div class="absolute w-40 h-40 bg-red-50 rounded-full flex items-center justify-center -z-10 mt-2"></div>
            <!-- Shield SVG -->
            <div class="relative">
                <svg class="w-24 h-24 text-red-600" fill="currentColor" viewBox="0 0 24 24"><path d="M12 1L3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V5l-9-4zm0 10.99h7c-.53 4.12-3.28 7.79-7 8.94V12H5V6.3l7-3.11v8.8z"/></svg>
                <div class="absolute inset-0 flex items-center justify-center pb-2">
                    <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 24 24"><path d="M18 8h-1V6c0-2.76-2.24-5-5-5S7 3.24 7 6v2H6c-1.1 0-2 .9-2 2v10c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V10c0-1.1-.9-2-2-2zM9 6c0-1.66 1.34-3 3-3s3 1.34 3 3v2H9V6zm9 14H6V10h12v10zm-6-3c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2z"/></svg>
                </div>
            </div>
            
        </div>
        
        <div class="text-center mb-8">
            <h1 class="text-2xl font-extrabold text-slate-900 mb-3">Verify OTP</h1>
            <p class="text-xs text-slate-500 font-medium px-4 leading-relaxed">
                Enter the 4-digit code sent to<br>
                <span class="text-slate-900 font-bold">your email address</span>
            </p>
        </div>

        <form id="otpForm" action="" method="POST" class="space-y-8 flex-1 flex flex-col">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="hidden" name="otp" id="otpValue" value="">
            
            <div class="flex justify-center gap-4 px-1">
                <input type="text" maxlength="1" class="otp-input w-14 h-16 border border-slate-200 rounded-xl text-center text-2xl font-black text-slate-900 focus:outline-none focus:ring-2 focus:ring-red-100 focus:border-red-500 transition shadow-sm">
                <input type="text" maxlength="1" class="otp-input w-14 h-16 border border-slate-200 rounded-xl text-center text-2xl font-black text-slate-900 focus:outline-none focus:ring-2 focus:ring-red-100 focus:border-red-500 transition shadow-sm">
                <input type="text" maxlength="1" class="otp-input w-14 h-16 border border-slate-200 rounded-xl text-center text-2xl font-black text-slate-900 focus:outline-none focus:ring-2 focus:ring-red-100 focus:border-red-500 transition shadow-sm">
                <input type="text" maxlength="1" class="otp-input w-14 h-16 border border-slate-200 rounded-xl text-center text-2xl font-black text-slate-900 focus:outline-none focus:ring-2 focus:ring-red-100 focus:border-red-500 transition shadow-sm">
            </div>

            @error('otp')
                <div class="text-red-500 text-sm text-center font-bold">{{ $message }}</div>
            @enderror

            <div class="text-center">
                <p class="text-xs font-semibold text-slate-500">Resend OTP in <span class="text-red-600 font-bold">00:45</span></p>
            </div>

            <div class="pt-2">
                <button type="button" onclick="submitOtp()" class="w-full bg-[#B20A0A] hover:bg-red-800 text-white font-bold py-3.5 rounded-xl transition shadow-md shadow-red-200/50">
                    Verify OTP
                </button>
            </div>

            <div class="text-center pt-2">
                <a href="/" class="text-xs font-bold text-red-600 hover:text-red-700 transition">Change Email</a>
            </div>
            
        </form>

    </div>

    <script>
        const inputs = document.querySelectorAll('.otp-input');
        inputs.forEach((input, index) => {
            input.addEventListener('keyup', (e) => {
                if (e.key >= 0 && e.key <= 9) {
                    if (index < inputs.length - 1) inputs[index + 1].focus();
                } else if (e.key === 'Backspace') {
                    if (index > 0) inputs[index - 1].focus();
                }
            });
        });

        function submitOtp() {
            let otp = '';
            inputs.forEach(input => otp += input.value);
            document.getElementById('otpValue').value = otp;
            document.getElementById('otpForm').submit();
        }
    </script>

    </div>

</body>
</html>
