<?php

namespace App\Livewire\Cart;

use App\Services\CartService;
use Livewire\Component;

class BtnAddItem extends Component
{
    public int $itemId;
    private CartService $cartService;

    public function boot(CartService $cartService) {
        $this->cartService = $cartService;
    }

    public function render()
    {
        return view('livewire.cart.btn-add-item');
    }

    public function addItem()
    {
        $this->cartService->addItem($this->itemId);
    }

}
