<?php

$file = 'resources/views/merchant/auth/business-address.blade.php';
$content = file_get_contents($file);

// Extract form body
preg_match('/<!-- Main card -->(.*?)<\/div>\s*<\/div>\s*<\/div>\s*<\/body>/s', $content, $cardMatches);
$cardContent = $cardMatches[1] ?? '';

// Wait, the file ends with:
// </div>
// </div>
// </div>
// </body>
// So the above regex is good.
if (empty($cardContent)) {
    // If regex fails, let's just do a simpler search
    $start = strpos($content, '<!-- Main card -->');
    if ($start !== false) {
        $end = strrpos($content, '</body>');
        $cardContent = substr($content, $start, $end - $start);
        $cardContent = preg_replace('/<\/div>\s*<\/div>\s*<\/div>\s*$/s', '', $cardContent);
    }
}

$html = '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Business Address - LoyalQR</title>
    <link rel="icon" type="image/jpeg" href="/favicon.jpg">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    <style>
        body { font-family: "Inter", sans-serif; }
        input:focus, select:focus { outline: none; border-color: #b00000; box-shadow: 0 0 0 3px rgba(176, 0, 0, 0.08); }
    </style>
</head>
<body class="bg-[#f1f5f9] text-[#0f172a] antialiased min-h-screen flex flex-col items-center justify-center p-4">
    <div class="w-full max-w-sm">
        '.$cardContent.'
    </div>
</body>
</html>';

file_put_contents($file, $html);
echo "Cleaned business-address successfully!\n";
