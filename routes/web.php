<?php

use App\Http\Controllers\PortfolioController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PortfolioController::class, 'index'])->name('portfolio.index');
Route::get('/about/aboutme', [PortfolioController::class, 'about'])->name('portfolio.about');
Route::get('/work/work', [PortfolioController::class, 'work'])->name('portfolio.work');
Route::get('/work/{slug}', [PortfolioController::class, 'show'])->name('portfolio.work.show');
Route::post('/contact', [PortfolioController::class, 'contact'])->name('portfolio.contact');
