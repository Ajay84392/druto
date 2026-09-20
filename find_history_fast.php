<?php

$dir = 'C:/Users/Ajay Singh/AppData/Roaming/Code/User/History';
if (! is_dir($dir)) {
    exit("No history dir\n");
}

$yesterday = time() - 86400;
$latestTime = 0;
$latestFile = '';

$iterator = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($dir));
foreach ($iterator as $file) {
    if ($file->isFile() && $file->getMTime() > $yesterday) {
        $content = file_get_contents($file->getPathname());
        if (strpos($content, 'REWARD EXPIRY') !== false && strpos($content, 'x-data') !== false) {
            if ($file->getMTime() > $latestTime) {
                $latestTime = $file->getMTime();
                $latestFile = $file->getPathname();
            }
        }
    }
}

if ($latestFile) {
    echo "Found $latestFile\n";
    copy($latestFile, 'resources/views/merchant/create-offer.blade.php');
    echo "Restored to resources/views/merchant/create-offer.blade.php\n";
} else {
    echo "Not found.\n";
}
