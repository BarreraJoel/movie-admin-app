@extends('layouts.app')

@section('title')
    Mi perfil
@endsection

@section('main-content')

    @if (session()->has('success'))
        <div class="alert alert-success" role="alert">
            {{session()->get('success')}}
        </div>
    @endif
    
    <div class="w-4/5 flex">
        <div class="card  w-1/4 sm:max-w-sm shadow-2xl">

            <div class="avatar @if(!$user->image_url) placeholder @endif w-1/2">
                <div class="@if(!$user->image_url) bg-info/20 text-info w-14 @endif rounded-full">
                    @if ($user->image_url)
                        <img src="{{asset('storage') . "/" .$user->image_url}}" alt="avatar" class="w-3"/>
                    @else
                        <span class="text-4xl uppercase">{{ $user->name[0] }}</span>
                    @endif
                </div>
            </div>

            <p>{{ $user->name }}</p>
            <p>{{ $user->email }}</p>
        </div>
        <div class="w-3/4 ">

            @include('components.user.user-form', compact('user'))

            @error('name')
                <div class="alert alert-error" role="alert">
                    {{$message}}
                </div>
            @enderror
            @error('email')
                <div class="alert alert-error" role="alert">
                    {{$message}}
                </div>
            @enderror

            <div class="mt-10">
                <form action="{{ route('users.update.password', $user) }}" method="post">
                    @csrf
                    <input type="hidden" name="_method" value="put">

                    <div>
                        @include(
                            'components.form.password',
                            [
                                'input_name' => 'password',
                                'input_text' => 'Contraseña',
                            ]
                        )
                    </div>
                    @error('password')
                        <div class="alert alert-error" role="alert">
                            {{$message}}
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
                            {{$message}}
                        </div>
                    @enderror

                    <button type="submit" class="btn btn-soft btn-warning" aria-haspopup="dialog" aria-expanded="false"
                        aria-controls="basic-modal" data-overlay="#basic-modal"><span class="icon-[tabler--refresh]"></span>
                        Actualizar</button>
                </form>
            </div>

            <div class="mt-10">
                <form action="{{ route('users.update.image', $user) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="_method" value="put">

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


                    <button type="submit" class="btn btn-soft btn-warning" aria-haspopup="dialog" aria-expanded="false"
                        aria-controls="basic-modal" data-overlay="#basic-modal"><span class="icon-[tabler--refresh]"></span>
                        Actualizar</button>
                </form>
            </div>
        </div>
    </div>

@endsection