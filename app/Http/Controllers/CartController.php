<?php

namespace App\Http\Controllers;

use App\Services\CartService;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public CartService $cartService;

    public function __construct(
        public CartService $service
    ) {
        $this->cartService = $service;
    }

    public function index()
    {
        $items = $this->cartService->getItems();
        // dd($items);
        return view('cart.index', compact('items'));
    }

    public function getItems()
    {
        return $this->cartService->getItems();
    }

    public function addItem(Request $request)
    {
        $this->cartService->addItem((int)$request->movie);

        return redirect()
            ->route('movies.index')
            ->with('success', 'Pelicula agregada al carrito');
    }

    public function removeItem(Request $request)
    {
        $this->cartService->removeItem($request->movie);
        return redirect()
            ->route('movies.index')
            ->with('success', 'Pelicula quitada del carrito');
    }
}
