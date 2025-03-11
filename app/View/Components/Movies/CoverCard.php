<?php

namespace App\View\Components\movies;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class CoverCard extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.movies.cover-card');
    }
}
