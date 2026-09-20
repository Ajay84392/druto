<?php

$file = 'resources/views/merchant/profile.blade.php';
$content = file_get_contents($file);
$content = str_replace('CafAc', 'Café', $content);
file_put_contents($file, $content);
