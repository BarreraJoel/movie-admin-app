@extends('layouts.app')

@section('title')
    Detalles de la pelicula
@endsection

@section('main-content')

    <div>
        {{-- <livewire:back-button /> --}}
        {{-- @livewire('back-button', ['route' => url('movies/')]) --}}
        @include('components.movies.movie-card', compact('movie'))
    </div>

@endsection