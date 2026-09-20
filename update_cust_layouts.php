<?php

$files = glob('resources/views/customer/*.blade.php');
foreach ($files as $file) {
    if (basename($file) === 'layout.blade.php') {
        unlink($file); // Remove the old customer layout
        echo "Deleted $file\n";

        continue;
    }

    $content = file_get_contents($file);
    if (strpos($content, "@extends('customer.layout')") !== false) {
        $content = str_replace("@extends('customer.layout')", "@extends('layouts.customer')", $content);
        file_put_contents($file, $content);
        echo "Updated $file\n";
    }
}
