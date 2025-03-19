<?php

namespace App\Providers;

use App\Models\User;
use App\Policies\MoviePolicy;
use Illuminate\Auth\Access\Response;
use Illuminate\Support\Facades\Gate;

class Gates {

    public static function define() {
        Gates::defineAdminActions();
    }

    private static function defineAdminActions() {
        Gate::define('create-movie', [MoviePolicy::class, 'create']);
        Gate::define('edit-movie', [MoviePolicy::class, 'edit']);
        Gate::define('delete-movie', [MoviePolicy::class, 'delete']);
    }
}