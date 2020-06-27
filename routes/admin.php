<?php

use Illuminate\Support\Facades\Route;

Route::redirect('/', '/acp/dashboard');

Route::get('dashboard', \App\Http\Controllers\Admin\DashboardController::class)->name('dashboard');

Route::resource('availabilities', \App\Http\Controllers\Admin\AvailabilityController::class)->except('show');
Route::resource('countries', \App\Http\Controllers\Admin\CountryController::class)->except('show');
Route::resource('currencies', \App\Http\Controllers\Admin\CurrencyController::class)->except('show');
Route::resource('property-types', \App\Http\Controllers\Admin\PropertyTypeController::class)->except('show');
