<?php

use App\Http\Controllers\AuthController;
use App\Http\Middleware\LoggedOutMiddleware;
use Illuminate\Support\Facades\Route;

Route::middleware(LoggedOutMiddleware::class)->group(function () {

    Route::prefix("auth")->group(function () {
        Route::get("login", [AuthController::class, "login"])
            ->name("login");
        Route::get("register", [AuthController::class, "register"])
            ->name("register");
        Route::post("log", [AuthController::class, "log"])
            ->name("log");
    });
});

Route::post("logout", [AuthController::class, "logout"])
    ->name("logout");
Route::post("add_user", [AuthController::class, "add_user"])
    ->name("add_user");
