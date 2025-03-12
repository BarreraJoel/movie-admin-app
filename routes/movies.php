<?php

use App\Http\Controllers\MovieController;
use Illuminate\Support\Facades\Route;



Route::resource('movies', MovieController::class)
->except(['show', 'edit']);

Route::prefix('movies')->group(function () {
    Route::get('{movie:slug}', [MovieController::class, 'show'])
    ->name('movies.show');
    Route::get('{movie:slug}/edit', [MovieController::class, 'edit'])
    ->name('movies.edit');
});