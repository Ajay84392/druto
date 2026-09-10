<?php
$f = 'resources/views/admin/dashboard.blade.php';
$c = file_get_contents($f);
$c = preg_replace('/,1/', '₹', $c);
file_put_contents($f, $c);
echo "Fixed";
