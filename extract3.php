<?php

$json = file_get_contents('scratch.json');
$json = trim(preg_replace('/^\xEF\xBB\xBF/', '', $json));
$obj = json_decode($json, true);
print_r(array_keys($obj));
