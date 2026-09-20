<?php

$lines = file('C:/Users/Ajay Singh/.gemini/antigravity/brain/571f0531-caf9-4506-b074-7dc5cea2307e/.system_generated/logs/transcript_full.jsonl');

$found = false;
foreach ($lines as $line) {
    $data = json_decode(trim($line), true);
    if ($data && isset($data['type']) && $data['type'] === 'TOOL_RESPONSE') {
        if (isset($data['content']) && strpos($data['content'], 'diff --git') !== false) {
            file_put_contents('diff_extracted.patch', $data['content']);
            echo "Found in content.\n";
            $found = true;
            break;
        }

        if (isset($data['tool_responses'])) {
            foreach ($data['tool_responses'] as $tr) {
                if (isset($tr['response']['output']) && strpos($tr['response']['output'], 'diff --git') !== false) {
                    file_put_contents('diff_extracted.patch', $tr['response']['output']);
                    echo "Found in tool_responses.\n";
                    $found = true;
                    break 2;
                }
            }
        }
    }
}

if (! $found) {
    echo "Could not find it.\n";
}
