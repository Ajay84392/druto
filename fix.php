<?php

$content = file_get_contents('resources/views/welcome.blade.php');

// The flag
$content = preg_replace('/<span class="text-lg mr-2">[^<]+<\/span>\s*<span>A Proudly Indian Platform/iu', '<span>A Proudly Indian Platform', $content);

// Warning ??
$content = preg_replace('/<span[^>]*mr-2">[^<]*<\/span>\s*Lost After the Sale/iu', '<span class="mr-2 text-amber-500">??</span> Lost After the Sale', $content);
$content = preg_replace('/<span[^>]*mr-2">[^<]*<\/span>\s*Profit-Bleeding Discounts/iu', '<span class="mr-2 text-amber-500">??</span> Profit-Bleeding Discounts', $content);
$content = preg_replace('/<span[^>]*mr-2">[^<]*<\/span>\s*Aggressive App Competition/iu', '<span class="mr-2 text-amber-500">??</span> Aggressive App Competition', $content);

// Sparkles ?
$content = preg_replace('/<span[^>]*mr-2">[^<]*<\/span>\s*Automated Dynamic Retention/iu', '<span class="mr-2 text-[#b00000]">?</span> Automated Dynamic Retention', $content);
$content = preg_replace('/<span[^>]*mr-2">[^<]*<\/span>\s*High-Dopamine Gamification/iu', '<span class="mr-2 text-[#b00000]">?</span> High-Dopamine Gamification', $content);
$content = preg_replace('/<span[^>]*mr-2">[^<]*<\/span>\s*100% Privacy & Zero Spam/iu', '<span class="mr-2 text-[#b00000]">?</span> 100% Privacy & Zero Spam', $content);

// Cross ?
$content = preg_replace('/<span[^>]*mr-2">[^<]*<\/span>\s*The Retention Leak/iu', '<span class="mr-2 text-red-500 font-bold">?</span> The Retention Leak', $content);

// The BeAurex Solution Check ?
$content = preg_replace('/<span[^>]*mr-2">[^<]*<\/span>\s*The BeAurex Solution/iu', '<span class="mr-2 text-[#22C55E] font-bold">?</span> The BeAurex Solution', $content);

// Check marks ? in lists
$content = preg_replace('/<span[^>]*mr-2\.5">[^<]*<\/span>/iu', '<svg class="w-4 h-4 mr-2.5 flex-shrink-0 inline" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>', $content);

// Contact info emoji replacements
$content = preg_replace('/<div class="text-2xl[^>]*>[^<]*<\/div>\s*<div>\s*<h4 class="font-bold text-\[\#0f172a\] text-sm">Email Us<\/h4>/iu',
    '<div class="text-2xl">??</div><div><h4 class="font-bold text-[#0f172a] text-sm">Email Us</h4>', $content);

$content = preg_replace('/<div class="text-2xl[^>]*>[^<]*<\/div>\s*<div>\s*<h4 class="font-bold text-\[\#0f172a\] text-sm">Call Us<\/h4>/iu',
    '<div class="text-2xl">??</div><div><h4 class="font-bold text-[#0f172a] text-sm">Call Us</h4>', $content);

$content = preg_replace('/<div class="text-2xl[^>]*>[^<]*<\/div>\s*<div>\s*<h4 class="font-bold text-\[\#0f172a\] text-sm">Visit Us<\/h4>/iu',
    '<div class="text-2xl">??</div><div><h4 class="font-bold text-[#0f172a] text-sm">Visit Us</h4>', $content);

// Emoji for plan headers
$content = preg_replace('/<span[^>]*>\s*[^<a-zA-Z0-9\s]*\s*Equivalent to/iu', '<span class="text-sm font-semibold text-slate-500 mb-6 block">? Equivalent to', $content);
$content = preg_replace('/<span[^>]*>\s*[^<a-zA-Z0-9\s]*\s*Only ?/iu', '<span class="text-sm font-semibold text-red-700 mb-6 block">?? Only ?', $content);
$content = preg_replace('/[^a-zA-Z0-9<>\s\/-]*Enjoy any plan free/iu', '?? Enjoy any plan free', $content);

file_put_contents('resources/views/welcome.blade.php', $content);
