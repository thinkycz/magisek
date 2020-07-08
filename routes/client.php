<?php

use Illuminate\Support\Facades\Route;

Route::get('/', \App\Http\Controllers\Client\HomeController::class)->name('home');

Route::get('categories', [\App\Http\Controllers\Client\CategoryController::class, 'index'])->name('categories.index');
Route::get('categories/{category}', [\App\Http\Controllers\Client\CategoryController::class, 'show'])->name('categories.show');

Route::get('products/{product}', \App\Http\Controllers\Client\ProductController::class)->name('products.show');
