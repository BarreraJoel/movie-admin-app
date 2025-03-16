@extends('layouts.app')

@section('title')
    Ver Carrito
@endsection

@section('main-content')

    <div class="w-full">
        @if (session()->has('success'))
            <div class="alert alert-primary" role="alert">
                {{session()->get('success')}}
            </div>
        @endif

        <div class="w-4/5 m-auto">
            <div>
                @livewire('cart.items')
                {{-- <x-cart.items  /> --}}
            </div>
            
            <div class="w-full flex justify-end mt-5">
                <button class="btn btn-soft btn-accent">
                    Finalizar Compra
                </button>
            </div>
        </div>

    </div>

@endsection