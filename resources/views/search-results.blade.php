@extends('layouts.app')

@section('title')
    Resultados
@endsection

@section('main-content')

    <div class="w-full">
        @livewire('search.items-results', compact('search'))
    </div>

@endsection