<?php

use Illuminate\Support\Facades\Route;

Route::get('/', \App\Http\Controllers\Client\HomeController::class)->name('home');
