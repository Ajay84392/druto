<?php

$directories = ['resources/views', 'app', 'routes', 'database'];
$replacements = [
    '/\bStamps\b/' => 'Orex Coins',
    '/\bstamps\b/' => 'orex coins',
    '/\bStamp\b/' => 'Orex Coin',
    '/\bstamp\b/' => 'orex coin',
    '/\bSTAMPS\b/' => 'OREX COINS',
    '/\bSTAMP\b/' => 'OREX COIN',
];

function replace_in_file($filepath, $replacements)
{
    $content = file_get_contents($filepath);
    $new_content = preg_replace(array_keys($replacements), array_values($replacements), $content);
    if ($new_content !== $content) {
        file_put_contents($filepath, $new_content);
        echo "Updated $filepath\n";
    }
}

foreach ($directories as $dir) {
    $iterator = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($dir));
    foreach ($iterator as $file) {
        if ($file->isFile() && $file->getExtension() === 'php') {
            replace_in_file($file->getPathname(), $replacements);
        }
    }
}
echo "Done!\n";
