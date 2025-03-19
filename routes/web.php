<?php

require_once "auth.php";
require_once "user.php";
require_once "movies.php";
require_once "cart.php";

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ResultsController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function () {
    Route::get('home', [HomeController::class, 'index'])
        ->name('home');
    Route::get('results', [ResultsController::class, 'find'])
        ->name('results');
});

Route::redirect('/', 'home');
