<?php

$file = 'resources/views/welcome.blade.php';
$content = file_get_contents($file);

$icon = '<svg class="w-5 h-5 text-[#22C55E] mr-2 flex-shrink-0" fill="currentColor" viewBox="0 0 24 24"><path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12zm13.36-1.814a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z" clip-rule="evenodd" /></svg>';

$content = str_replace('<span class="text-[#22C55E] mr-2">?</span>', $icon, $content);
file_put_contents($file, $content);
echo "Added solid colour check icons.\n";
