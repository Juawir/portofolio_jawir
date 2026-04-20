<?php

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));

// Mempersiapkan struktur wadah (Writable /tmp di Vercel)
$compiledViewPath = '/tmp/storage/framework/views';
$cachePath = '/tmp/storage/framework/cache/data';
$logsPath = '/tmp/storage/logs';

foreach ([$compiledViewPath, $cachePath, $logsPath] as $path) {
    if (!is_dir($path)) {
        mkdir($path, 0777, true);
    }
}

// Muat komponen Laravel
require __DIR__.'/../vendor/autoload.php';
$app = require_once __DIR__.'/../bootstrap/app.php';

// Paksa Laravel menggunakan wadah Serverless
$app->useStoragePath('/tmp/storage');

// Proses jalankan permintaan
$app->handleRequest(Request::capture());
