<?php

namespace App\Livewire\Cart;

use App\Models\Movie;
use App\Services\CartService;
use Livewire\Component;

class ItemCart extends Component
{
    public Movie $movie;
    private CartService $cartService;

    public function boot(CartService $cartService)
    {
        $this->cartService = $cartService;
    }

    public function render()
    {
        return view('livewire.cart.item-cart');
    }

    public function removeItem($id)
    {
        $this->cartService->removeItem($id);
    }
}
