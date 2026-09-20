<?php

$content = file_get_contents('resources/views/welcome.blade.php');

// Replace the corrupt flag in the Top Trust Bar: "dYrdY3 Trusted by" -> "Trusted by" or "🇮🇳 Trusted by" -> "Trusted by"
$content = preg_replace('/<span[^>]*>[^<]*Trusted by Fast-Growing Businesses Across India<\/span>/i', '<span>Trusted by Fast-Growing Businesses Across India</span>', $content);

// Replace the corrupt drop-down arrow in Navigation Login: "-" or "▼" -> "" (remove completely or change to a clean icon)
$content = preg_replace('/<span class="text-xs">[^<]*<\/span>\s*<\/button>/i', '</button>', $content);

// Replace "A Proudly Indian Platform Built with love..."
$content = preg_replace('/<span class="text-lg mr-2">[^<]*<\/span>\s*<span>A Proudly Indian Platform/i', '<span>A Proudly Indian Platform', $content);

// Replace Warning icons in the Reality Check Section
$content = preg_replace('/<span[^>]*mr-2">[^<]*<\/span>\s*Lost After the Sale/i', '<span class="mr-2 text-amber-500">??</span> Lost After the Sale', $content);
$content = preg_replace('/<span[^>]*mr-2">[^<]*<\/span>\s*Profit-Bleeding Discounts/i', '<span class="mr-2 text-amber-500">??</span> Profit-Bleeding Discounts', $content);
$content = preg_replace('/<span[^>]*mr-2">[^<]*<\/span>\s*Aggressive App Competition/i', '<span class="mr-2 text-amber-500">??</span> Aggressive App Competition', $content);
$content = preg_replace('/<span[^>]*mr-2">[^<]*<\/span>\s*The Retention Leak/i', '<span class="mr-2 text-red-500 font-bold">?</span> The Retention Leak', $content);

// Replace Sparkles ?
$content = preg_replace('/<span[^>]*mr-2">[^<]*<\/span>\s*Automated Dynamic Retention/i', '<span class="mr-2 text-[#b00000]">?</span> Automated Dynamic Retention', $content);
$content = preg_replace('/<span[^>]*mr-2">[^<]*<\/span>\s*High-Dopamine Gamification/i', '<span class="mr-2 text-[#b00000]">?</span> High-Dopamine Gamification', $content);
$content = preg_replace('/<span[^>]*mr-2">[^<]*<\/span>\s*100% Privacy & Zero Spam/i', '<span class="mr-2 text-[#b00000]">?</span> 100% Privacy & Zero Spam', $content);
$content = preg_replace('/<span[^>]*mr-2">[^<]*<\/span>\s*The BeAurex Solution/i', '<span class="mr-2 text-[#22C55E] font-bold">?</span> The BeAurex Solution', $content);

// Replace list checks (green and amber checkmarks)
$content = preg_replace('/<span class="text-\[\#22C55E\] font-bold mr-2\.5">[^<]*<\/span>/i', '<svg class="w-4 h-4 mr-2.5 flex-shrink-0 inline text-[#22C55E]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>', $content);
$content = preg_replace('/<span class="text-amber-400 font-bold mr-2\.5">[^<]*<\/span>/i', '<svg class="w-4 h-4 mr-2.5 flex-shrink-0 inline text-amber-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>', $content);
$content = preg_replace('/<span class="text-slate-400 font-bold mr-2\.5">[^<]*<\/span>/i', '<svg class="w-4 h-4 mr-2.5 flex-shrink-0 inline text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M6 18L18 6M6 6l12 12"></path></svg>', $content);

// Replace list checks inside <li class="text-[#22C55E]">
$content = preg_replace('/<span class="text-\[\#22C55E\] mr-2\.5">[^<]*<\/span>/i', '<svg class="w-4 h-4 mr-2.5 flex-shrink-0 inline text-[#22C55E]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>', $content);
$content = preg_replace('/<span class="text-amber-400 mr-2\.5">[^<]*<\/span>/i', '<svg class="w-4 h-4 mr-2.5 flex-shrink-0 inline text-amber-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>', $content);

// Replace the specific Corrupted amounts
$content = str_replace('A?sA136,000', '?36,000', $content);
$content = str_replace('A?sA124,000', '?24,000', $content);
$content = str_replace('A?sA12,000', '?2,000', $content);
$content = str_replace('A?sA172,000', '?72,000', $content);
$content = str_replace('A?sA149,000', '?49,000', $content);
$content = str_replace('A?sA11,361', '?1,361', $content);
$content = str_replace('A?sA11,20,000', '?1,20,000', $content);
$content = str_replace('A?sA175,000', '?75,000', $content);

// Also replace the other encoding ones:
$content = str_replace('₹36,000', '?36,000', $content);
$content = str_replace('₹24,000', '?24,000', $content);
$content = str_replace('₹2,000', '?2,000', $content);
$content = str_replace('₹72,000', '?72,000', $content);
$content = str_replace('₹49,000', '?49,000', $content);
$content = str_replace('₹1,361', '?1,361', $content);
$content = str_replace('₹1,20,000', '?1,20,000', $content);
$content = str_replace('₹75,000', '?75,000', $content);

// Clean up plan tags
$content = preg_replace('/<span[^>]*>\s*[^<a-zA-Z0-9\s]*\s*Equivalent to/i', '<span class="text-sm font-semibold text-slate-500 mb-6 block">? Equivalent to', $content);
$content = preg_replace('/<span[^>]*>\s*[^<a-zA-Z0-9\s]*\s*Only ?/i', '<span class="text-sm font-semibold text-red-700 mb-6 block">?? Only ?', $content);
$content = preg_replace('/[^a-zA-Z0-9<>\s\/-]*Enjoy any plan free/i', '?? Enjoy any plan free', $content);

// Contact info emoji replacements
$content = preg_replace('/<div class="text-2xl[^>]*>[^<]*<\/div>\s*<div>\s*<h4 class="font-bold text-\[\#0f172a\] text-sm">Email Us<\/h4>/i',
    '<div class="text-2xl">??</div><div><h4 class="font-bold text-[#0f172a] text-sm">Email Us</h4>', $content);

$content = preg_replace('/<div class="text-2xl[^>]*>[^<]*<\/div>\s*<div>\s*<h4 class="font-bold text-\[\#0f172a\] text-sm">Call Us<\/h4>/i',
    '<div class="text-2xl">??</div><div><h4 class="font-bold text-[#0f172a] text-sm">Call Us</h4>', $content);

$content = preg_replace('/<div class="text-2xl[^>]*>[^<]*<\/div>\s*<div>\s*<h4 class="font-bold text-\[\#0f172a\] text-sm">Visit Us<\/h4>/i',
    '<div class="text-2xl">??</div><div><h4 class="font-bold text-[#0f172a] text-sm">Visit Us</h4>', $content);

// Wait, checking the hero image. It was reset by git checkout! Let me re-replace the hero image.
$content = str_replace('src="/images/hero_image.png"', 'src="/images/hero_image_clean.png"', $content);

// Grid classes which were reset by git checkout! I need to re-apply the grid fix to welcome.blade.php.
$content = preg_replace('/class="([^"]*)grid-cols-3([^"]*)"/', 'class="$1grid-cols-1 md:grid-cols-2 lg:grid-cols-3$2"', $content);
$content = preg_replace('/class="([^"]*)grid-cols-2([^"]*)"/', 'class="$1grid-cols-1 md:grid-cols-2$2"', $content);

file_put_contents('resources/views/welcome.blade.php', $content);
