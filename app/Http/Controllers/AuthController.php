<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use App\Services\FileService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class AuthController
{
    public function login(Request $request)
    {
        return view("auth.login");
    }

    public function register(Request $request)
    {
        return view("auth.register");
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect()->route('login');
    }


    public function log(LoginRequest $request)
    {
        $validator = Validator::make($request->all(), $request->rules());

        if ($validator->fails()) {
            return redirect()->route('login')
                ->withInput()
                ->withErrors($validator);
        }

        if (Auth::attempt($request->validated())) {
            return redirect()->route('home');
        }

        return redirect()->route('login')
            ->withErrors([
                'not_found' => 'User not found'
            ]);
    }

    public function add_user(RegisterRequest $request)
    {
        $validator = Validator::make(
            $request->all(),
            $request->rules()
        );

        if ($validator->fails()) {
            return redirect()->route('register')
                ->withInput()
                ->withErrors($validator);
        }

        $newUser = new User($request->except([
            'password',
            'password_confirmation',
            'image_url'
        ]));

        $newUser->password = Hash::make($request->input('password'));
        $path = FileService::upload(
            $request,
            'image_url',
            $request->input('name') . '.jpg',
            "/users"
        );

        $newUser->image_url = $path;
        $newUser->save();
        
        return redirect()
            ->route('register')
            ->with('success', 'Usuario registrado, inicie sesión');
    }
}
