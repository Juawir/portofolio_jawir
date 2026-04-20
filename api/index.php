<?php

// Force HTTPS for Vercel Mix Content Issue
if (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https') {
    $_SERVER['HTTPS'] = 'on';
}

use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));

$compiledViewPath = '/tmp/storage/framework/views';
$cachePath = '/tmp/storage/framework/cache/data';
$logsPath = '/tmp/storage/logs';
$bootstrapPath = '/tmp/bootstrap/cache';

foreach ([$compiledViewPath, $cachePath, $logsPath, $bootstrapPath] as $path) {
    if (!is_dir($path)) {
        @mkdir($path, 0777, true);
    }
}

require __DIR__.'/../vendor/autoload.php';
$app = require_once __DIR__.'/../bootstrap/app.php';

$app->useStoragePath('/tmp/storage');
if (method_exists($app, 'useBootstrapPath')) {
    $app->useBootstrapPath('/tmp/bootstrap');
}

$app->handleRequest(Request::capture());
