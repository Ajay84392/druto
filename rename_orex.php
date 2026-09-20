<?php

$dirs = ['resources/views', 'app', 'routes', 'database'];
foreach ($dirs as $dir) {
    if (! is_dir($dir)) {
        continue;
    }
    $iterator = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($dir));
    foreach ($iterator as $file) {
        if ($file->isFile() && in_array($file->getExtension(), ['php', 'html'])) {
            $content = file_get_contents($file->getPathname());
            $newContent = str_replace(['Orex', 'orex', 'OREX'], ['Aurex', 'aurex', 'AUREX'], $content);
            if ($newContent !== $content) {
                file_put_contents($file->getPathname(), $newContent);
                echo 'Updated '.$file->getPathname()."\n";
            }
        }
    }
}
