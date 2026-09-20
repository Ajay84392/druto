<?php

$file = 'resources/views/merchant/profile.blade.php';
$content = file_get_contents($file);

// Replace Business Category Icon
$content = str_replace(
    '<div class="text-[#EF4444]"><svg',
    '<div class="w-10 h-10 rounded-xl bg-red-100 flex items-center justify-center text-[#EF4444] shrink-0"><svg',
    $content
);

// Replace Contact Number Icon
$content = str_replace(
    '<div class="text-purple-500"><svg',
    '<div class="w-10 h-10 rounded-xl bg-purple-100 flex items-center justify-center text-purple-600 shrink-0"><svg',
    $content
);

// Replace Email Address Icon
$content = str_replace(
    '<div class="text-blue-500"><svg',
    '<div class="w-10 h-10 rounded-xl bg-blue-100 flex items-center justify-center text-blue-600 shrink-0"><svg',
    $content
);

// Replace Business Address Icon
$content = str_replace(
    '<div class="text-rose-500"><svg',
    '<div class="w-10 h-10 rounded-xl bg-rose-100 flex items-center justify-center text-rose-600 shrink-0"><svg',
    $content
);

file_put_contents($file, $content);
echo "Updated merchant profile icon backgrounds.\n";
