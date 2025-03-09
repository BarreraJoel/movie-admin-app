@extends('layouts.app')

@section('title')
    Iniciar Sesión
@endsection

@section('main-content')
    <h3>LOGIN</h3>

    <form method="post" action="{{ route('log') }}">
        @csrf

        <label for="email" class="label">Email</label>
        <input type="email" class="input" name="email" value="{{session()->getOldInput('email')}}">
        @error('email')
            <div class="alert alert-error" role="alert">
                {{ $message }}
            </div>
        @enderror

        <label for="password" class="label">Contraseña</label>
        <input type="password" class="input" name="password" value="{{session()->getOldInput('password')}}">
        @error('password')
            <div class="alert alert-error" role="alert">
                {{ $message }}
            </div>
        @enderror

        <button type="submit" class="btn btn-primary">Iniciar Sesión</button>

    </form>

    @error('not_found')
        <div class="text-error">
            {{ $message }}
        </div>
    @enderror
@endsection