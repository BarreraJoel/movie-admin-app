@extends('layouts.app')

@section('title')
    Agregar pelicula
@endsection

@section('main-content')

    @include('components.breadcrumb', [
        'routes' => [
            ['url' => 'movies.index', 'name' => 'Peliculas', 'param_name' => null, 'param_value' => null],
            ['url' => 'movies.create', 'name' => 'Agregar pelicula', 'param_name' => null, 'param_value' => null]
        ]
    ])

    <div>
        <x-movie-form />
    </div>

@endsection