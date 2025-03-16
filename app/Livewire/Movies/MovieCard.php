<?php

namespace App\Livewire\Movies;

use App\Models\Movie;
use App\Services\CartService;
use Livewire\Component;

class MovieCard extends Component
{
    public Movie $movie;
    public bool $exists = false;
    private CartService $cartService;

    public function boot(CartService $cartService)
    {
        $this->cartService = $cartService;
        // $this->exists = $this->verifyItemExists($this->movie->id);
    }

    public function render()
    {
        return view('livewire.movies.movie-card');
    }

    public function addItem($id)
    {
        $this->cartService->addItem($id);
    }

    private function verifyItemExists($id) {
        return $this->cartService->verifyItemExists($id);
    }
}
