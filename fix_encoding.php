<?php

$file = 'resources/views/customer/home.blade.php';
$content = file_get_contents($file);

// Fix the crown emoji
$content = str_replace('dY``', '👑', $content);

// Fix the bullet point
$content = preg_replace('/Member Since.*?Jul 2026/', 'Member Since • Jul 2026', $content);

file_put_contents($file, $content);
echo "Fixed customer home encoding\n";
