<?php

$content = file_get_contents('resources/views/welcome.blade.php');
$content = preg_replace('/A[^0-9<]*([0-9,]+)/iu', '?$1', $content);
$content = preg_replace('/\? Equivalent to/iu', '? Equivalent to', $content);
file_put_contents('resources/views/welcome.blade.php', $content);
