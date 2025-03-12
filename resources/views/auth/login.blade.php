@extends('layouts.app')

@section('title')
    Iniciar Sesión
@endsection

@section('main-content')
    <h3>Inicio de sesión</h3>

    <form method="post" action="{{ route('log') }}">
        @csrf

        @include(
            'components.form.input',
            [
                'type' => 'email',
                'input_name' => 'email',
                'input_text' => 'Email',
                'placeholder' => 'Ingrese el email'
            ]
        )
        @error('email')
            <div class="alert alert-error" role="alert">
                {{ $message }}
            </div>
        @enderror

        @include(
            'components.form.password',
            [
                'input_name' => 'password',
                'input_text' => 'Contraseña',
            ]
        )
        @error('password')
            <div class="alert alert-error" role="alert">
                {{ $message }}
            </div>
        @enderror

        <button type="submit" class="btn btn-primary">Iniciar Sesión</button>

    </form>

    @error('not_found')
        <div class="alert alert-error">
            {{ $message }}
        </div>
    @enderror
@endsection