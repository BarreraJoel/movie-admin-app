@extends('layouts.app')

@section('title')
    Editar pelicula
@endsection

@section('main-content')

    @include('components.breadcrumb', [
        'routes' => [
            ['url' => 'movies.index', 'name' => 'Peliculas', 'param_name' => null, 'param_value' => null],
            ['url' => 'movies.show', 'name' => $movie->name, 'param_name' => 'movie', 'param_value' => $movie],
            ['url' => 'movies.edit', 'name' => 'Editar', 'param_name' => 'movie', 'param_value' => $movie],
        ]
    ])
    <div>
        <x-movies.movie-form-edit :movie="$movie" />
    </div>

@endsection