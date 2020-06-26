<?php

use Illuminate\Support\Facades\Route;

Route::redirect('/', '/acp/dashboard');

Route::get('dashboard', \App\Http\Controllers\Admin\DashboardController::class)->name('dashboard');

Route::resource('availabilities', \App\Http\Controllers\Admin\AvailabilityController::class)->except('show');
Route::resource('currencies', \App\Http\Controllers\Admin\CurrencyController::class)->except('show');
