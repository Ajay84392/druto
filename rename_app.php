<?php

$dir = new RecursiveDirectoryIterator('app');
$iterator = new RecursiveIteratorIterator($dir);

foreach ($iterator as $file) {
    if ($file->isFile() && str_ends_with($file->getFilename(), '.php')) {
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

echo "App Done.\n";
