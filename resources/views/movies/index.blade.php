@extends('layouts.app')

@section('title')
    Peliculas
@endsection

@section('main-content')

    <div class="w-full">
        @if (session()->has('success'))
            <div class="alert alert-primary" role="alert">
                {{session()->get('success')}}
            </div>
        @endif

        <ul class="flex justify-around">
            @foreach ($movies as $movie)
                <li>
                    @include('components.movies.cover-card', compact('movie'))
                </li>
            @endforeach
        </ul>
    </div>

@endsection