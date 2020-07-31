<?php

use Illuminate\Support\Facades\Route;

Route::get('/', \App\Http\Controllers\Client\HomeController::class)->name('home');
Route::get('categories', [\App\Http\Controllers\Client\CategoryController::class, 'index'])->name('categories.index');
Route::get('categories/{category}', [\App\Http\Controllers\Client\CategoryController::class, 'show'])->name('categories.show');
Route::get('products/{product}', \App\Http\Controllers\Client\ProductController::class)->name('products.show');
Route::get('pages/{page}', \App\Http\Controllers\Client\PageController::class)->name('pages.show');
Route::get('basket', \App\Http\Controllers\Client\BasketController::class)->name('basket.index');
Route::get('checkout', \App\Http\Controllers\Client\CheckoutController::class)->name('checkout.index');
Route::get('search', \App\Http\Controllers\Client\SearchController::class)->name('search.index');
Route::post('checkout/process-order', \App\Http\Controllers\Client\CheckoutActions\ProcessOrderController::class)->name('checkout.process-order');
Route::get('thank-you/{order}', \App\Http\Controllers\Client\ThankYouController::class)->name('thank-you.index');

Route::group(['middleware' => 'auth'], function () {
    Route::get('orders', [\App\Http\Controllers\Client\OrderController::class, 'index'])->name('orders.index');
    Route::get('orders/{order}', [\App\Http\Controllers\Client\OrderController::class, 'show'])->name('orders.show');

    Route::get('profile', \App\Http\Controllers\Client\ProfileController::class)->middleware('password.confirm')->name('profile.index');
    Route::post('profile/update-account-settings', \App\Http\Controllers\Client\ProfileActions\UpdateAccountSettingsController::class)->name('profile.update-account-settings');

    Route::get('privacy', \App\Http\Controllers\Client\PrivacyController::class)->middleware('password.confirm')->name('privacy.index');
});
