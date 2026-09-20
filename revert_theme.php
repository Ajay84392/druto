<?php

$dirs = ['resources/views'];
$reps = [
    '#D60000' => '#b00000',
    '#A30000' => '#8a0000',
    '#F8F9FB' => '#f1f5f9',
    '#E5E7EB' => '#e2e8f0',
    '#1A1A1A' => '#0f172a',
    '#666666' => '#475569',
    'rounded-[10px]' => 'rounded-xl',
    'rounded-[16px]' => 'rounded-2xl',
];
foreach ($dirs as $dir) {
    $ite = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($dir));
    foreach ($ite as $f) {
        if ($f->isFile() && $f->getExtension() === 'php') {
            $c = file_get_contents($f->getPathname());
            $nc = str_replace(array_keys($reps), array_values($reps), $c);
            if ($nc !== $c) {
                file_put_contents($f->getPathname(), $nc);
                echo 'Reverted '.$f->getPathname().PHP_EOL;
            }
        }
    }
}
