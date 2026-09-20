<?php

$lines = file('C:/Users/Ajay Singh/.gemini/antigravity/brain/7f650bc8-29f3-4c2c-94f3-f9ea1f57d1ba/.system_generated/logs/transcript_full.jsonl');
foreach ($lines as $line) {
    if (strpos($line, 'check this code contetent only <!DOCTYPE html>') !== false) {
        $obj = json_decode($line, true);
        file_put_contents('scratch.html', $obj['content']);
        echo 'Success';
        break;
    }
}
