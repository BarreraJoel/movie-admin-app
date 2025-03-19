<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMovieRequest;
use App\Models\Movie;
use App\Services\FileService;
use App\Services\ValidatorService;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Gate;

class MovieController extends Controller
{
    /**
     * Summary of index
     * @return \Illuminate\Contracts\View\View
     */
    public function index()
    {
        $movies = Movie::all();
        return view('movies.index', compact('movies'));
    }
    
    /**
     * Summary of create
     * @return \Illuminate\Contracts\View\View
     */
    public function create()
    {
        Gate::authorize('create-movie', Auth::user());
        return view('movies.create');
    }

    /**
     * Summary of store
     * @param \App\Http\Requests\StoreMovieRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(StoreMovieRequest $request)
    {
        ValidatorService::validate(
            $request->all(),
            $request->rules(),
            'movies.create'
        );

        $path = FileService::upload(
            $request,
            'image_url',
            $request->input('name') . '.jpg',
            "/movies"
        );

        $newMovie = new Movie($request->except(['image_url', 'categories']));
        $newMovie->slug = Str::slug($request->input('name'), '-');
        $newMovie->image_url = $path;
        $newMovie->save();

        $newMovie->categories()->attach($request->input('categories'));

        return redirect()->route('movies.index')
            ->with('success', 'Pelicula agregada');
    }

    /**
     * Summary of show
     * @param \App\Models\Movie $movie
     * @return \Illuminate\Contracts\View\View
     */
    public function show(Movie $movie)
    {
        return view('movies.show', compact('movie'));
    }

    /**
     * Summary of edit
     * @param \App\Models\Movie $movie
     * @return \Illuminate\Contracts\View\View
     */
    public function edit(Movie $movie)
    {
        Gate::authorize('edit-movie', Auth::user());
        return view('movies.edit', compact('movie'));
    }

    /**
     * Summary of update
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Movie $movie
     * @return void
     */
    public function update(StoreMovieRequest $request, Movie $movie)
    {
        ValidatorService::validate(
            $request->all(),
            $request->rules(),
            'movies.edit'
        );

        $path = FileService::upload(
            $request,
            'image_url',
            $request->input('name') . '.jpg',
            "/movies"
        );

        $movie->fill($request->except(['image_url', 'categories']));
        $movie->slug = Str::slug($request->input('name'), '-');
        $movie->image_url = $path;
        $movie->update();

        $movie->categories()->attach($request->input('categories'));

        return redirect()->route('movies.index')
            ->with('success', 'Pelicula modificada');
    }

    /**
     * Summary of destroy
     * @param \App\Models\Movie $movie
     * @return void
     */
    public function destroy(Movie $movie)
    {
        Gate::authorize('delete-movie', Auth::user());

        $movie->delete();

        return redirect()->route('movies.index')
            ->with('success', 'Pelicula eliminada exitosamente');
    }
}
