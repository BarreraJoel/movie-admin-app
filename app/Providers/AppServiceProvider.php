<?php

namespace App\Providers;

use App\Models\Movie;
use App\Policies\MoviePolicy;
use App\Services\CartService;
use App\Services\MovieService;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{

    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->singleton(CartService::class, function ($app) {
            return new CartService();
        });

        $this->app->singleton(MovieService::class, function ($app) {
            return new MovieService();
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Gates::define();
    }
}
