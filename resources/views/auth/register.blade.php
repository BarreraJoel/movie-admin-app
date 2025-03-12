@extends('layouts.app')

@section('title')
    Registrar
@endsection

@section('main-content')
    <h3>Registro</h3>
    
    @if (session()->has('success'))
        <div class="alert alert-primary" role="alert">
            {{session()->get('success')}}
        </div>
    @endif

    <form method="post" action="{{ route('add_user') }}" enctype="multipart/form-data">
        @csrf

        <div>
            @include(
                'components.form.input',
                [
                    'type' => 'text',
                    'input_name' => 'name',
                    'input_text' => 'Nombre',
                    'placeholder' => 'Ingrese el nombre',
                ]
            )
        </div>

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

        <div>
            @include(
                'components.form.password',
                [
                    'input_name' => 'password_confirmation',
                    'input_text' => 'Confirmar contraseña'
                ]
            )
        </div>
        @error('password_confirmation')
            <div class="alert alert-error" role="alert">
                {{ $message }}
            </div>
        @enderror

        <div>
            @include(
                'components.form.input-file',
                [
                    'input_name' => 'image_url',
                    'input_text' => 'Foto de perfil'
                ]
            )
        </div>
        @error('image_url')
            <div class="alert alert-error" role="alert">
                {{$message}}
            </div>
        @enderror


        <button type="submit" class="btn btn-primary">Registrar</button>

    </form>

@endsection