<?php

$c = file_get_contents('resources/views/admin/claims.blade.php');
$c = preg_replace_callback('/CLM100\d{2}/', function () {
    return 'CLM-'.strtoupper(substr(md5(uniqid()), 0, 6));
}, $c);
file_put_contents('resources/views/admin/claims.blade.php', $c);
