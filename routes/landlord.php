<?php

use Illuminate\Support\Facades\Route;

Route::get('/', \App\Http\Controllers\Landlord\LandingController::class)->name('landing');
