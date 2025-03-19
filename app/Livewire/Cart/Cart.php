<?php

namespace App\Livewire\Cart;

use App\Services\CartService;
use Livewire\Component;

class Cart extends Component
{
    private CartService $cartService;

    public function boot(CartService $cartService)
    {
        $this->cartService = $cartService;
    }

    public function render()
    {
        return view('livewire.cart.cart', [
            'cart' => $this->cartService->cartInstance,
            'cartService' => $this->cartService,
        ]);
    }
}
