@extends('layouts.app')

@section('title')
    {{ $movie->name }} ({{ $movie->age }})
@endsection

@section('main-content')

    @include('components.breadcrumb', [
        'routes' => [
            ['url' => 'movies.index', 'name' => 'Peliculas', 'param_name' => null, 'param_value' => null],
            ['url' => 'movies.show','name' => $movie->name,'param_name' => 'movie','param_value' => $movie],
        ]
    ])
    
    <div>
        @if (session()->has('success'))
            <div class="alert alert-success" role="alert">
                {{session()->get('success')}}
            </div>
        @endif

        <div class="h-full">
            @livewire('movies.movie-card', compact('movie'))
        </div>
    </div>

@endsection