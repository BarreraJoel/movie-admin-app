<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserImageRequest;
use App\Http\Requests\UpdateUserPasswordRequest;
use App\Models\User;
use App\Services\FileService;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Summary of show
     * @param \App\Models\User $user
     * @return \Illuminate\Contracts\View\View
     */
    public function show(User $user)
    {
        return view('user.profile', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreUserRequest $request, User $user)
    {
        dd($request->all());
    }

    public function update_password(UpdateUserPasswordRequest $request, User $user)
    {
        dd($request->all());
    }

    public function update_image(UpdateUserImageRequest $request, User $user)
    {

        $path = FileService::upload(
            $request,
            'image_url',
            $user->name . '.jpg',
            "/users"
        );

        $user->image_url = $path;
        $user->save();

        return redirect()
            ->route('users.show', compact('user'))
            ->with('success', 'Usuario actualizado');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }
}
