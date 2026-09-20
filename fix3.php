<?php

$content = file_get_contents('resources/views/welcome.blade.php');

// Replace the corrupt flag in the Top Trust Bar: "dYrdY3 Trusted by" -> "Trusted by" or "🇮🇳 Trusted by" -> "Trusted by"
$content = preg_replace('/<span[^>]*>[^<]*Trusted by Fast-Growing Businesses Across India<\/span>/iu', '<span>Trusted by Fast-Growing Businesses Across India</span>', $content);

// Replace the corrupt drop-down arrow in Navigation Login: "-" or "▼" -> "" (remove completely or change to a clean icon)
$content = preg_replace('/<span class="text-xs">[^<]*<\/span>\s*<\/button>/iu', '</button>', $content);

// Replace "A Proudly Indian Platform Built with love..."
$content = preg_replace('/<span class="text-lg mr-2">[^<]*<\/span>\s*<span>A Proudly Indian Platform/iu', '<span>A Proudly Indian Platform', $content);

// Replace Warning icons in the Reality Check Section
$content = preg_replace('/<span[^>]*mr-2">[^<]*<\/span>\s*Lost After the Sale/iu', '<span class="mr-2 text-amber-500">??</span> Lost After the Sale', $content);
$content = preg_replace('/<span[^>]*mr-2">[^<]*<\/span>\s*Profit-Bleeding Discounts/iu', '<span class="mr-2 text-amber-500">??</span> Profit-Bleeding Discounts', $content);
$content = preg_replace('/<span[^>]*mr-2">[^<]*<\/span>\s*Aggressive App Competition/iu', '<span class="mr-2 text-amber-500">??</span> Aggressive App Competition', $content);
$content = preg_replace('/<span[^>]*mr-2">[^<]*<\/span>\s*The Retention Leak/iu', '<span class="mr-2 text-red-500 font-bold">?</span> The Retention Leak', $content);

// Replace Sparkles ?
$content = preg_replace('/<span[^>]*mr-2">[^<]*<\/span>\s*Automated Dynamic Retention/iu', '<span class="mr-2 text-[#b00000]">?</span> Automated Dynamic Retention', $content);
$content = preg_replace('/<span[^>]*mr-2">[^<]*<\/span>\s*High-Dopamine Gamification/iu', '<span class="mr-2 text-[#b00000]">?</span> High-Dopamine Gamification', $content);
$content = preg_replace('/<span[^>]*mr-2">[^<]*<\/span>\s*100% Privacy & Zero Spam/iu', '<span class="mr-2 text-[#b00000]">?</span> 100% Privacy & Zero Spam', $content);
$content = preg_replace('/<span[^>]*mr-2">[^<]*<\/span>\s*The BeAurex Solution/iu', '<span class="mr-2 text-[#22C55E] font-bold">?</span> The BeAurex Solution', $content);

// Replace list checks (green and amber checkmarks)
$content = preg_replace('/<span class="text-\[\#22C55E\] font-bold mr-2\.5">[^<]*<\/span>/iu', '<svg class="w-4 h-4 mr-2.5 flex-shrink-0 inline text-[#22C55E]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>', $content);
$content = preg_replace('/<span class="text-amber-400 font-bold mr-2\.5">[^<]*<\/span>/iu', '<svg class="w-4 h-4 mr-2.5 flex-shrink-0 inline text-amber-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>', $content);
$content = preg_replace('/<span class="text-slate-400 font-bold mr-2\.5">[^<]*<\/span>/iu', '<svg class="w-4 h-4 mr-2.5 flex-shrink-0 inline text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M6 18L18 6M6 6l12 12"></path></svg>', $content);

// Replace list checks inside <li class="text-[#22C55E]">
$content = preg_replace('/<span class="text-\[\#22C55E\] mr-2\.5">[^<]*<\/span>/iu', '<svg class="w-4 h-4 mr-2.5 flex-shrink-0 inline text-[#22C55E]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>', $content);
$content = preg_replace('/<span class="text-amber-400 mr-2\.5">[^<]*<\/span>/iu', '<svg class="w-4 h-4 mr-2.5 flex-shrink-0 inline text-amber-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>', $content);

// Fix pricing text and corrupted Rupee symbol
// "₹36,000" or "A?sA136,000" -> "?36,000"
$content = preg_replace('/(>|\s)(?:₹|A\?sA1|A\?\S+|🔥|✨|🎉|✓|✕|� �|📧|📞|� |©|dY[^A-Za-z0-9]*|A[^<a-zA-Z0-9\s]*)([0-9,]+)(<\/span>|<\/div>|\/|\s)/u', '$1?$2$3', $content);
// Manual fallback for specific weirdly corrupted Rupee sequences:
$content = preg_replace('/(>|\s)[^\s<>\w]{2,8}?([0-9]{2,3},[0-9]{3})(<\/span>|<\/div>|\/|\s)/u', '$1?$2$3', $content);
// The above might be risky if we have other numbers. Let's just hardcode the 6 numbers on the page!
$content = str_replace(['₹36,000', 'A?sA136,000'], '?36,000', $content);
$content = str_replace(['₹24,000', 'A?sA124,000'], '?24,000', $content);
$content = str_replace(['₹2,000', 'A?sA12,000'], '?2,000', $content);
$content = str_replace(['₹72,000', 'A?sA172,000'], '?72,000', $content);
$content = str_replace(['₹49,000', 'A?sA149,000'], '?49,000', $content);
$content = str_replace(['₹1,361', 'A?sA11,361'], '?1,361', $content);
$content = str_replace(['₹1,20,000', 'A?sA11,20,000'], '?1,20,000', $content);
$content = str_replace(['₹75,000', 'A?sA175,000'], '?75,000', $content);

// And clean up plan tags
$content = preg_replace('/<span[^>]*>\s*[^<a-zA-Z0-9\s]*\s*Equivalent to/iu', '<span class="text-sm font-semibold text-slate-500 mb-6 block">? Equivalent to', $content);
$content = preg_replace('/<span[^>]*>\s*[^<a-zA-Z0-9\s]*\s*Only ?/iu', '<span class="text-sm font-semibold text-red-700 mb-6 block">?? Only ?', $content);
$content = preg_replace('/[^a-zA-Z0-9<>\s\/-]*Enjoy any plan free/iu', '?? Enjoy any plan free', $content);

// Contact info emoji replacements
$content = preg_replace('/<div class="text-2xl[^>]*>[^<]*<\/div>\s*<div>\s*<h4 class="font-bold text-\[\#0f172a\] text-sm">Email Us<\/h4>/iu',
    '<div class="text-2xl">??</div><div><h4 class="font-bold text-[#0f172a] text-sm">Email Us</h4>', $content);

$content = preg_replace('/<div class="text-2xl[^>]*>[^<]*<\/div>\s*<div>\s*<h4 class="font-bold text-\[\#0f172a\] text-sm">Call Us<\/h4>/iu',
    '<div class="text-2xl">??</div><div><h4 class="font-bold text-[#0f172a] text-sm">Call Us</h4>', $content);

$content = preg_replace('/<div class="text-2xl[^>]*>[^<]*<\/div>\s*<div>\s*<h4 class="font-bold text-\[\#0f172a\] text-sm">Visit Us<\/h4>/iu',
    '<div class="text-2xl">??</div><div><h4 class="font-bold text-[#0f172a] text-sm">Visit Us</h4>', $content);

// Wait, checking the hero image. It was reset by git checkout! Let me re-replace the hero image.
$content = str_replace('src="/images/hero_image.png"', 'src="/images/hero_image_clean.png"', $content);

// Grid classes which were reset by git checkout! I need to re-apply the grid fix to welcome.blade.php.
$content = preg_replace('/class="([^"]*)grid-cols-3([^"]*)"/', 'class="$1grid-cols-1 md:grid-cols-2 lg:grid-cols-3$2"', $content);
$content = preg_replace('/class="([^"]*)grid-cols-2([^"]*)"/', 'class="$1grid-cols-1 md:grid-cols-2$2"', $content);
// Prevent duplication
$content = str_replace('grid-cols-1 md:grid-cols-1 md:grid-cols-2 lg:grid-cols-3', 'grid-cols-1 md:grid-cols-2 lg:grid-cols-3', $content);
$content = str_replace('grid-cols-1 md:grid-cols-1 md:grid-cols-2', 'grid-cols-1 md:grid-cols-2', $content);

file_put_contents('resources/views/welcome.blade.php', $content);
