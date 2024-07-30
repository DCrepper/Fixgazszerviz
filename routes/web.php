<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CheckOutController;

Route::view('/', 'index')->name('index');



Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';


Route::prefix('product')->as('product.')->group(function () {
    Route::get('/', [ProductController::class, 'index'])->name('index');
});
Route::prefix('cart')->as('cart.')->group(function () {
    Route::get('/', [CartController::class, 'index'])->name('index');
    Route::post('/add/{product}', [CartController::class, 'addProduct'])->name('add');
    Route::get('/clear', [CartController::class, 'clearCartItems'])->name('clear');
    Route::delete('/remove/{product}', [CartController::class, 'removeProduct'])->name('remove');
});

Route::prefix('order')->as('order.')->group(function () {
    Route::get('/', [OrderController::class, 'index'])->name('index');
    Route::post('/store', [OrderController::class, 'store'])->name('store');
    Route::get('/show/{order}', [OrderController::class, 'show'])->name('show');
    Route::middleware('auth')->group(function () {
        Route::get('/my-orders', [OrderController::class, 'myOrders'])->name('myOrders');
    });
    Route::get('/thank-you', [OrderController::class, 'thankYou'])->name('thankyou');
});

Route::prefix('checkout')->as('checkout.')->group(function () {
    Route::get('/', [CheckOutController::class, 'index'])->name('index');
});
