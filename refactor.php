<?php

$content = file_get_contents('resources/views/merchant/dashboard.blade.php');
$content = preg_replace('/^.*?<main[^>]*>/s', "@extends('layouts.merchant')\n\n@section('title', 'Merchant Dashboard')\n\n@section('content')\n<div class=\"flex-1 overflow-auto p-6 md:p-10\">\n", $content);
$content = preg_replace('/<\/main>.*?$/s', "</div>\n@endsection\n", $content);
file_put_contents('resources/views/merchant/dashboard.blade.php', $content);
