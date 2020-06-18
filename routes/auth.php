<?php

use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group(function () {
    Route::view('login', 'auth.login')->name('login');
    Route::view('register', 'auth.register')->name('register');
});

Route::view('password/reset', 'auth.passwords.email')->name('password.request');
Route::get('password/reset/{token}', \App\Http\Controllers\Auth\PasswordResetController::class)->name('password.reset');

Route::middleware('auth')->group(function () {
    Route::view('email/verify', 'auth.verify')->middleware('throttle:6,1')->name('verification.notice');
    Route::get('email/verify/{id}/{hash}', \App\Http\Controllers\Auth\EmailVerificationController::class)->middleware('signed')->name('verification.verify');

    Route::any('logout', \App\Http\Controllers\Auth\LogoutController::class)->name('logout');

    Route::view('password/confirm', 'auth.passwords.confirm')->name('password.confirm');
});
