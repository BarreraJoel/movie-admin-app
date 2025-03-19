<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResultsController extends Controller
{
    public function find(Request $request)
    {
        return view('search-results', [
            'search' => $request->search
        ]);
    }
}
