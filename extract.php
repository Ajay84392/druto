<?php

$json = file_get_contents('C:/Users/Ajay Singh/.gemini/antigravity/brain/7f650bc8-29f3-4c2c-94f3-f9ea1f57d1ba/scratch/raw.json');
$json = trim(preg_replace('/^\xEF\xBB\xBF/', '', $json));
$obj = json_decode($json);
file_put_contents('C:/Users/Ajay Singh/.gemini/antigravity/brain/7f650bc8-29f3-4c2c-94f3-f9ea1f57d1ba/scratch/raw.html', $obj->content);
