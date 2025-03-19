<?php

use App\Http\Controllers\CartController;
use Illuminate\Support\Facades\Route;


Route::middleware('auth')->group(function () {

    Route::prefix('cart')->group(function () {
        Route::get('checkout', [CartController::class, 'checkout'])
            ->name('cart.checkout');
    });
});
