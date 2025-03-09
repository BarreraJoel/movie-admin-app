<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class AuthController
{
    public function login(Request $request)
    {
        return view("auth.login");
    }

    public function register(Request $request) {}

    public function logout(Request $request) {
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
}
