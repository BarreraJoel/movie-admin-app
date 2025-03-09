<?php

namespace App\Http\Controllers;

use App\Models\Movie;

class HomeController extends Controller
{
    public function index() {

        // $movies = Movie::all();

        // return view("home" , [
        //     'movies' => $movies,
        // ]);
        return view('home');
    }
}
