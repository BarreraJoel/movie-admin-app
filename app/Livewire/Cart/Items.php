<?php

namespace App\Livewire\Cart;

use App\Models\Movie;
use App\Services\CartService;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Component;

class Items extends Component
{
    public Collection $movies;
    private CartService $cartService;

    public function mount()
    {
        $this->getMovies();
    }

    public function boot(CartService $cartService)
    {
        $this->cartService = $cartService;
    }

    public function render()
    {
        return view('livewire.cart.items');
    }

    private function getMovies()
    {
        $this->movies = new Collection();

        foreach ($this->cartService->getItems() as $item) {
            $this->movies->push(Movie::find($item));
        }
    }

    public function removeItem($id)
    {
        $this->cartService->removeItem($id);
    }

}
