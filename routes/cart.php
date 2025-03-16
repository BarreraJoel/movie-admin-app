<?php

use App\Http\Controllers\CartController;
use Illuminate\Support\Facades\Route;


Route::middleware('auth')->group(function () {

    Route::prefix('cart')->group(function () {
        Route::get('index', [CartController::class, 'index'])
            ->name('cart.index');
    });
});
