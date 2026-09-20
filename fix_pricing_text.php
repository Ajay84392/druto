<?php

$file = 'resources/views/welcome.blade.php';
$content = file_get_contents($file);

// 1. Remove the strikethrough price and equivalent month from Standard Plan
$content = preg_replace('/<div class="mb-2"><span class="text-slate-400 line-through text-sm font-bold">?36,000<\/span><\/div>\s*/', '', $content);
$content = preg_replace('/<p class="text-sm font-bold text-slate-500 mb-6">? Equivalent to ?2,000\/month<\/p>\s*/', '', $content);

// 2. Remove the strikethrough price and only per month from Professional Plan
$content = preg_replace('/<div class="mb-2"><span class="text-slate-400 line-through text-sm font-bold">?72,000<\/span><\/div>\s*/', '', $content);
$content = preg_replace('/<p class="text-sm font-bold text-red-600 mb-6">?? Only ?1,361\/month<\/p>\s*/', '', $content);

// 3. Remove the strikethrough price from Legacy Plan
$content = preg_replace('/<div class="mb-2"><span class="text-slate-500 line-through text-sm font-bold">?1,20,000<\/span><\/div>\s*/', '', $content);

// 4. Change "Enjoy any plan free for 2 days" to green
$content = str_replace(
    '<p class="inline-block bg-indigo-50 text-indigo-700 font-bold px-4 py-2 rounded-lg text-sm">?? Enjoy any plan free for 2 days. No payment required.</p>',
    '<p class="inline-block bg-green-50 text-green-700 font-bold px-4 py-2 rounded-lg text-sm">?? Enjoy any plan free for 2 days. No payment required.</p>',
    $content
);

file_put_contents($file, $content);
echo "Pricing text updated successfully.\n";
