<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return 'landing';
})->name('landing');
