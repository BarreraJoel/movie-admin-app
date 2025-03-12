@extends('layouts.app')

@section('title')
    {{ $movie->name }} ({{ $movie->age }})
@endsection

@section('main-content')

    <div>
        @if (session()->has('success'))
            <div class="alert alert-success" role="alert">
                {{session()->get('success')}}
            </div>
        @endif

        @include('components.movies.movie-card', compact('movie'))
    </div>

@endsection