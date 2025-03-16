<?php

namespace App\View\Components;

use App\Services\CartService;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Cart extends Component
{
    // public CartService $cartService;
    /**
     * Create a new component instance.
     */
    public function __construct(
        public CartService $cartService
    ) {
        // $this->cartService = $service;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.cart');
    }
}
