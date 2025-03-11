@extends('layouts.app')

@section('title')
    Editar pelicula
@endsection

@section('main-content')

    <div>
        <x-movies.movie-form-edit :movie="$movie" />
    </div>

@endsection