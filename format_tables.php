<?php

$dirs = [
    'resources/views/admin/',
    'resources/views/admin/merchants/',
    'resources/views/admin/plans/',
    'resources/views/admin/customers/',
    'resources/views/admin/offers/',
    'resources/views/admin/referrals/',
    'resources/views/admin/coupons/',
    'resources/views/admin/settings/',
];

function processFile($file)
{
    if (! file_exists($file)) {
        return;
    }

    // Read
    $content = file_get_contents($file);

    // Only process if it has a table
    if (strpos($content, '<table') === false) {
        return;
    }

    // Replace overflow-x-auto table-container
    $content = str_replace('class="overflow-x-auto table-container"', 'class="overflow-x-auto"', $content);

    // Replace table
    $content = preg_replace('/<table[^>]+>/', '<table class="w-full text-left border-collapse">', $content);

    // Replace thead tr
    $content = preg_replace('/<thead[^>]*>\s*<tr[^>]+>/', '<thead>'."\n".'                    <tr class="bg-[#f1f5f9] border-b border-[#e2e8f0] text-xs font-bold text-[#475569] uppercase tracking-wider">', $content);

    // Replace tbody
    $content = preg_replace('/<tbody[^>]*>/', '<tbody class="divide-y divide-slate-100 text-sm">', $content);

    // Replace tbody tr
    // This is a bit tricky, we want to replace <tr class="hover:..."> inside tbody
    // Using a simpler approach: replace any `<tr class="hover:bg-[#f1f5f9] transition">` or similar
    $content = preg_replace('/<tr class="hover:bg-[^"]*transition"([^>]*)>/', '<tr class="hover:bg-[#f1f5f9]/50 transition"$1>', $content);
    $content = preg_replace('/<tr class="hover:bg-slate-50 transition border-b border-slate-50 last:border-0"([^>]*)>/', '<tr class="hover:bg-[#f1f5f9]/50 transition"$1>', $content);
    $content = preg_replace('/<tr class="hover:bg-\[#f1f5f9\] transition"([^>]*)>/', '<tr class="hover:bg-[#f1f5f9]/50 transition"$1>', $content);

    // Some tr don't have hover:bg... but are just <tr>? We know most have hover:bg-[#f1f5f9] transition from the powershell output.

    file_put_contents($file, $content);
    echo "Processed $file\n";
}

$filesToProcess = [
    'resources/views/admin/merchants/index.blade.php',
    'resources/views/admin/plans/index.blade.php',
    'resources/views/admin/customers.blade.php',
    'resources/views/admin/customers/index.blade.php', // Check both just in case
    'resources/views/admin/offers/index.blade.php',
    'resources/views/admin/claims.blade.php',
    'resources/views/admin/referrals/index.blade.php',
    'resources/views/admin/coupons/index.blade.php',
    'resources/views/admin/dashboard.blade.php', // Sometimes has tables
];

foreach ($filesToProcess as $file) {
    processFile($file);
}

echo "Done formatting tables!\n";
