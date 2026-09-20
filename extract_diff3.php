<?php

$content = file_get_contents('C:/Users/Ajay Singh/.gemini/antigravity/brain/571f0531-caf9-4506-b074-7dc5cea2307e/.system_generated/logs/transcript_full.jsonl');

$start = strpos($content, 'diff --git a/resources/views/welcome.blade.php b/resources/views/welcome.blade.php');
if ($start !== false) {
    $end = strpos($content, 'The command exited', $start);
    if ($end === false) {
        $end = strpos($content, '",', $start);
    }

    $diffRaw = substr($content, $start, $end - $start);

    // Unescape basic json stuff manually just in case
    $diff = str_replace(['\n', '\r', '\"', '\\\\', '\t'], ["\n", "\r", '"', '\\', "\t"], $diffRaw);

    file_put_contents('diff_extracted.patch', $diff);
    echo "Extracted patch!\n";
} else {
    echo "Pattern not found.\n";
}
