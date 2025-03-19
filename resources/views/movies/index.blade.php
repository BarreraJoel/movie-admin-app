@extends('layouts.app')

@section('title')
    Peliculas
@endsection

@section('main-content')

    @if (session()->has('success'))
        <div class="alert alert-primary" role="alert">
            {{session()->get('success')}}
        </div>
    @endif

    <div class="w-full">
        <ul class="flex justify-around">
            @foreach ($movies as $movie)
                <li>
                    @include('components.movies.cover-card', compact('movie'))
                </li>
            @endforeach
        </ul>
    </div>

@endsection