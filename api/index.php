<?php
ini_set('display_errors', '1');
error_reporting(E_ALL);

echo "Step 1: PHP Jalan. <br>";

use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));

echo "Step 2: Menyiapkan tmp. <br>";
$compiledViewPath = '/tmp/storage/framework/views';
$cachePath = '/tmp/storage/framework/cache/data';
$logsPath = '/tmp/storage/logs';
$bootstrapPath = '/tmp/bootstrap/cache';

foreach ([$compiledViewPath, $cachePath, $logsPath, $bootstrapPath] as $path) {
    if (!is_dir($path)) {
        @mkdir($path, 0777, true);
    }
}

echo "Step 3: Memuat Vendor. <br>";
if (!file_exists(__DIR__.'/../vendor/autoload.php')) {
    die("VENDOR TIDAK DITEMUKAN! Vercel gagal menjalankan composer install.");
}
require __DIR__.'/../vendor/autoload.php';

echo "Step 4: Memuat Bootstrap Laravel 11. <br>";
$app = require_once __DIR__.'/../bootstrap/app.php';

echo "Step 5: Overriding Storage Path. <br>";
$app->useStoragePath('/tmp/storage');
if (method_exists($app, 'useBootstrapPath')) {
    $app->useBootstrapPath('/tmp/bootstrap');
}

echo "Step 6: Handle Request. <br>";
$app->handleRequest(Request::capture());

