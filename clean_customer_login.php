<?php

$file = 'resources/views/auth/login.blade.php';
$content = file_get_contents($file);

// Extract the content inside the <!-- Card --> ... </div>
preg_match('/<!-- Card -->\s*<div[^>]*>(.*?)<\/div>\s*<\/div>\s*<\/div>\s*<!--/s', $content.'<!--', $cardMatches);
// Actually, it's easier to just match from <!-- Heading --> to the end of the form card content
preg_match('/<!-- Heading -->(.*?)<\/div>\s*<\/div>\s*<\/div>\s*<\/body>/s', $content, $fullFormMatches);
$cardContent = $fullFormMatches[1] ?? '';

if (empty($cardContent)) {
    // If the regex failed because of slightly different closing tags
    preg_match('/<!-- Heading -->(.*?)<!-- =====/s', $content.'<!-- =====', $fallback);
    $cardContent = $fallback[1] ?? '';
}

// Just safely extract what we need
$start = strpos($content, '<!-- Heading -->');
if ($start !== false) {
    // find the last occurrence of </p> or </a> for the signup link, or just find the form closing tag and everything after it up to the card end
    // Let's just do a greedy match up to the end of the </div> that wraps the card.
    $cardEnd = strrpos($content, '</div>', strrpos($content, '</div>', strrpos($content, '</div>', strrpos($content, '</body>') - 1) - 1) - 1);
    // actually, let's just use string operations to be very safe
    $formPart = substr($content, $start);
    $formPart = preg_replace('/<\/div>\s*<\/div>\s*<\/div>\s*<\/body>\s*<\/html>\s*/s', '', $formPart);
    $cardContent = trim($formPart);
}

$html = '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Login - LoyalQR</title>
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
            '.$cardContent.'
        </div>
    </div>
</body>
</html>';

file_put_contents($file, $html);
echo "Cleaned customer login successfully!\n";
