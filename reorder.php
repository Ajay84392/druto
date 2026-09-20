<?php

$file = 'resources/views/merchant/auth/login.blade.php';
$content = file_get_contents($file);

// Extract the two main panels
// 1. LEFT BRANDING PANEL
$patternLeft = '/(<!-- ===== LEFT BRANDING PANEL ===== -->.*?)(?=<!-- ===== RIGHT FORM PANEL ===== -->)/s';
preg_match($patternLeft, $content, $matchesLeft);
$leftPanel = $matchesLeft[1] ?? null;

// 2. RIGHT FORM PANEL
$patternRight = '/(<!-- ===== RIGHT FORM PANEL ===== -->.*?)(?=\s*<\/body>)/s';
preg_match($patternRight, $content, $matchesRight);
$rightPanel = $matchesRight[1] ?? null;

if ($leftPanel && $rightPanel) {
    // We want Form on the Left, Branding on the Right
    $newRightPanel = str_replace('<!-- ===== RIGHT FORM PANEL ===== -->', '<!-- ===== LEFT FORM PANEL ===== -->', $rightPanel);
    $newLeftPanel = str_replace('<!-- ===== LEFT BRANDING PANEL ===== -->', '<!-- ===== RIGHT BRANDING PANEL ===== -->', $leftPanel);

    // Also, branding panel should take flex-1 to fill the rest of the space?
    // Let's make Form Panel w-full lg:w-1/2 flex-1
    // and Branding Panel hidden lg:flex lg:w-1/2
    $newRightPanel = str_replace('class="flex-1 flex flex-col bg-white"', 'class="flex-1 lg:w-1/2 flex flex-col bg-white overflow-y-auto"', $newRightPanel);
    $newLeftPanel = str_replace('class="hidden lg:flex lg:w-5/12 xl:w-[420px] flex-shrink-0 flex-col"', 'class="hidden lg:flex lg:w-1/2 flex-shrink-0 flex-col"', $newLeftPanel);

    // Replace in original content
    // Replace the old LEFT panel with the new RIGHT panel (the form)
    $newContent = preg_replace($patternLeft, $newRightPanel."\n\n", $content);
    // Replace the old RIGHT panel with the new LEFT panel (the branding)
    $newContent = preg_replace($patternRight, $newLeftPanel, $newContent);

    file_put_contents($file, $newContent);
    echo "Flipped successfully!\n";
} else {
    echo "Could not find panels.\n";
}
