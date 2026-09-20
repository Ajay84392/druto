<?php

$file = 'resources/views/merchant/dashboard.blade.php';
$content = file_get_contents($file);

// Fix crown emoji
$content = str_replace('dY``', '👑', $content);

// Fix Rupee symbol and 999
$content = preg_replace('/,1999 \/ yr/', '₹999 / yr', $content);

file_put_contents($file, $content);
echo "Fixed encoding issues on merchant dashboard\n";
