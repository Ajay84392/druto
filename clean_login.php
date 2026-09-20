<?php

$file = 'resources/views/merchant/auth/login.blade.php';
$content = file_get_contents($file);

// Extract just the form body
preg_match('/<!-- Form body -->(.*?)<!-- Onboarding steps badge -->/s', $content, $bodyMatches);
$formBody = $bodyMatches[1] ?? '';

// Extract Onboarding steps badge
preg_match('/<!-- Onboarding steps badge -->(.*?)<\/div>\s*<\/div>\s*<\/div>/s', $content, $badgeMatches);
$badge = ($badgeMatches[1] ?? '').'</div>';

$html = '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Merchant Login - LoyalQR</title>
    <link rel="icon" type="image/jpeg" href="/favicon.jpg">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <style>
        body { font-family: "Inter", sans-serif; }
        input:focus { outline: none; border-color: #b00000; box-shadow: 0 0 0 3px rgba(176, 0, 0, 0.08); }
    </style>
</head>
<body class="bg-[#f1f5f9] text-[#0f172a] antialiased min-h-screen flex flex-col items-center justify-center p-4">
    <!-- Form area -->
    <div class="w-full max-w-sm">
        <!-- Main card -->
        <div class="bg-white rounded-2xl border border-[#e2e8f0] shadow-sm overflow-hidden mb-6">
            <!-- Pink top section -->
            <div class="flex flex-col items-center pt-6 pb-4 px-8" style="background:#fff5f5">
                <h2 class="text-xl font-black text-[#0f172a] mb-1 text-center">Welcome Back!</h2>
                <p class="text-xs font-medium text-[#475569] text-center">Login to manage your loyalty program</p>
            </div>
';

$html .= "<!-- Form body -->\n".$formBody."</div>\n<!-- Onboarding steps badge -->\n<div class=\"mt-4\">".$badge.'</div>';
$html .= '
    </div>
</body>
</html>';

file_put_contents($file, $html);
echo "Cleaned login successfully!\n";
