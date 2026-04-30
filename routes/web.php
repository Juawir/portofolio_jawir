<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioController;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/proyek', function () {
    return view('projects');
})->name('projects');

Route::get('/pengalaman', function () {
    return view('experience');
})->name('experience');

Route::get('/kontak', function () {
    return view('contact');
})->name('contact');

Route::get('/download-portfolio', [PortfolioController::class, 'downloadPortfolio'])->name('portfolio.download');
