<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function () {

    Route::prefix('users')->group(function () {

        Route::get("{user}", [UserController::class, "show"])
            ->name("users.show");

        Route::prefix('update')->group(function () {
            Route::put("{user}", [UserController::class, "update"])
                ->name("users.update");
            Route::put("password/{user}", [UserController::class, "update_password"])
                ->name("users.update.password");
            Route::put("image/{user}", [UserController::class, "update_image"])
                ->name("users.update.image");
        });
    });
});
