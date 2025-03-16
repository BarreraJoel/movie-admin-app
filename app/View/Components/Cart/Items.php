<?php

namespace App\View\Components\Cart;

use App\Models\Movie;
use App\Services\CartService;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\View\Component;

class Items extends Component
{
    public Collection $movies;

    /**
     * Create a new component instance.
     */
    public function __construct(
        public CartService $cartService
    ) {
        $this->getMovies();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.cart.items');
    }

    private function getMovies() {
        $this->movies = new Collection();
        
        foreach ($this->cartService->getItems() as $item) {
            $this->movies->push(Movie::find($item));
        }
    }
}
