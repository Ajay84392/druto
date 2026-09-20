<?php

$lines = file('C:/Users/Ajay Singh/.gemini/antigravity/brain/571f0531-caf9-4506-b074-7dc5cea2307e/.system_generated/logs/transcript_full.jsonl');
$line = $lines[157];
$data = json_decode(trim($line), true);

$output = null;
if (isset($data['content'])) {
    $output = $data['content'];
} elseif (isset($data['tool_responses'][0]['response']['output'])) {
    $output = $data['tool_responses'][0]['response']['output'];
} elseif (isset($data['args']['output'])) {
    $output = $data['args']['output'];
} else {
    $output = print_r($data, true);
}
file_put_contents('diff_extracted.patch', $output);
echo "Done.\n";
