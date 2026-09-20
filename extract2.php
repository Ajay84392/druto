<?php

$json = file_get_contents('scratch.json');
$json = trim(preg_replace('/^\xEF\xBB\xBF/', '', $json));
$obj = json_decode($json, true);
if (isset($obj['content'])) {
    file_put_contents('scratch.html', $obj['content']);
    echo 'Extracted to scratch.html';
} else {
    echo 'No content field found';
}
