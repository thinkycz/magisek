<?php

use Illuminate\Support\Facades\Route;

Route::redirect('/', '/acp/dashboard');

Route::get('dashboard', \App\Http\Controllers\Admin\DashboardController::class)->name('dashboard');

Route::resource('users', \App\Http\Controllers\Admin\UserController::class)->except('show');
Route::resource('categories', \App\Http\Controllers\Admin\CategoryController::class);
Route::resource('pages', \App\Http\Controllers\Admin\PageController::class)->except('show');
Route::resource('banners', \App\Http\Controllers\Admin\BannerController::class)->except('show');
Route::resource('coupons', \App\Http\Controllers\Admin\CouponController::class)->except('show');

Route::resource('orders', \App\Http\Controllers\Admin\OrderController::class)->only('index', 'show', 'destroy');
Route::post('orders/{order}/update-status', \App\Http\Controllers\Admin\OrderActions\UpdateStatusController::class)->name('orders.update-status');
Route::post('orders/{order}/update-delivery-payment', \App\Http\Controllers\Admin\OrderActions\UpdateDeliveryPaymentController::class)->name('orders.update-delivery-payment');
Route::post('orders/{order}/update-shipping', \App\Http\Controllers\Admin\OrderActions\UpdateShippingController::class)->name('orders.update-shipping');
Route::post('orders/{order}/update-billing', \App\Http\Controllers\Admin\OrderActions\UpdateBillingController::class)->name('orders.update-billing');
Route::get('orders/{order}/invoice', \App\Http\Controllers\Admin\OrderActions\GenerateInvoiceController::class)->name('orders.generate-invoice');

Route::resource('products', \App\Http\Controllers\Admin\ProductController::class);
Route::post('products/{product}/upload-photo', \App\Http\Controllers\Admin\ProductActions\UploadPhotoController::class)->name('products.upload-photo');
Route::post('products/{product}/update-pricing', \App\Http\Controllers\Admin\ProductActions\UpdatePricingController::class)->name('products.update-pricing');
Route::post('products/{product}/update-stock', \App\Http\Controllers\Admin\ProductActions\UpdateStockController::class)->name('products.update-stock');

Route::get('google-sheets', \App\Http\Controllers\Admin\GoogleSheetsController::class)->name('google-sheets.index');
Route::get('google-sheets/configure', [\App\Http\Controllers\Admin\GoogleSheetsActions\ConfigureController::class, 'index'])->name('google-sheets.configure');
Route::post('google-sheets/configure', [\App\Http\Controllers\Admin\GoogleSheetsActions\ConfigureController::class, 'store'])->name('google-sheets.store-configuration');

Route::get('heureka', \App\Http\Controllers\Admin\HeurekaController::class)->name('heureka.index');

Route::resource('delivery-methods', \App\Http\Controllers\Admin\DeliveryMethodController::class)->except('show');
Route::resource('payment-methods', \App\Http\Controllers\Admin\PaymentMethodController::class)->except('show');
Route::resource('price-levels', \App\Http\Controllers\Admin\PriceLevelController::class)->except('show');
Route::resource('preferences', \App\Http\Controllers\Admin\PreferenceController::class)->only('index', 'edit', 'update');
Route::resource('settings', \App\Http\Controllers\Admin\SettingController::class)->only('index', 'edit', 'update');

Route::resource('availabilities', \App\Http\Controllers\Admin\AvailabilityController::class)->except('show');
Route::resource('countries', \App\Http\Controllers\Admin\CountryController::class)->except('show');
Route::resource('currencies', \App\Http\Controllers\Admin\CurrencyController::class)->except('show');
Route::resource('property-types', \App\Http\Controllers\Admin\PropertyTypeController::class)->except('show');
Route::resource('statuses', \App\Http\Controllers\Admin\StatusController::class)->except('show');
Route::resource('units', \App\Http\Controllers\Admin\UnitController::class)->except('show');
