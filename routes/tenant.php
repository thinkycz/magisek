<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return Spatie\Multitenancy\Models\Tenant::current();
})->name('home');
