<?php
$dirs = [
    'resources/views/merchant' => 'merchant',
    'resources/views/customer' => 'customer'
];

foreach ($dirs as $dir => $layout) {
    if (!is_dir($dir)) continue;
    $files = scandir($dir);
    foreach ($files as $file) {
        if (strpos($file, '.blade.php') !== false) {
            $path = "$dir/$file";
            $content = file_get_contents($path);
            
            // Only process if it has a <main> tag (which means it's a full raw HTML file)
            if (strpos($content, '<main') !== false && strpos($content, '<html') !== false) {
                // Get page title dynamically if possible
                preg_match('/<title>(.*?)<\/title>/s', $content, $matches);
                $title = isset($matches[1]) ? strip_tags($matches[1]) : ucfirst($layout) . ' Dashboard';
                
                // Replace everything up to <main ...> with the blade extension
                $content = preg_replace('/^.*?<main[^>]*>/s', "@extends('layouts.$layout')\n\n@section('title', '$title')\n\n@section('content')\n<div class=\"flex-1 overflow-auto p-6 md:p-10\">\n", $content);
                
                // Replace </main> and everything after with @endsection
                $content = preg_replace('/<\/main>.*?$/s', "</div>\n@endsection\n", $content);
                
                file_put_contents($path, $content);
                echo "Refactored $path\n";
            }
        }
    }
}
