<?php

$dir = new RecursiveDirectoryIterator('resources/views');
$iterator = new RecursiveIteratorIterator($dir);

foreach ($iterator as $file) {
    if ($file->isFile() && str_ends_with($file->getFilename(), '.blade.php')) {
        $path = $file->getPathname();
        $content = file_get_contents($path);

        $newContent = str_replace(
            ['BeAurex', 'beaurex', 'BeAurex', 'beaurex', 'BEAUREX'],
            ['BeAurex', 'beaurex', 'BeAurex', 'beaurex', 'BEAUREX'],
            $content
        );

        if ($newContent !== $content) {
            file_put_contents($path, $newContent);
            echo "Updated: $path\n";
        }
    }
}

echo "Done.\n";
