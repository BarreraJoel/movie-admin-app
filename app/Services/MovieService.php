<?php

namespace App\Services;

use App\Models\Movie;
use Illuminate\Support\Facades\DB;

class MovieService
{

    public function __construct() {}

    public function findByName(string $name)
    {
        $movies = Movie::where('name', $name)
            ->orWhereLike('name', $name . '%')
            ->orWhereLike('name', '%' . $name)
            ->orWhereLike('name', '%' . $name . '%')
            ->get();

        return $movies;
    }
}
