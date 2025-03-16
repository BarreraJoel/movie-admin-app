<?php

namespace App\Services;

use App\Models\Cart;
use App\Models\Movie;

class CartService
{
    public Cart $cart;
    public Cart|null $cartInstance;

    public function __construct()
    {
        $this->cart = new Cart();
        $this->cartInstance = $this->getInstance();
    }

    public function verifyItemExists($item)
    {
        $itemIndex = array_search($item, $this->cartInstance->idItems);
        return $itemIndex == false ?? true;
    }

    public static function getInstance()
    {
        return session('cart');
    }

    public function cast($id)
    {
        return Movie::find($id);
    }

    public function getItems()
    {
        return $this->cartInstance ? $this->cartInstance->idItems : null;
    }

    public function addItem($id)
    {
        array_push($this->cart->idItems, $id);
        $merge = array_merge($this->cart->idItems, $this->cartInstance ? $this->cartInstance->idItems : []);

        if ($this->cartInstance) {
            $this->cartInstance->idItems = $merge;
            $this->cartInstance->total = $this->calcularPrecio();
        } else {
            $this->cart->idItems = $merge;
            $this->cart->total = $this->calcularPrecio();
        }

        session()->put('cart', $this->cartInstance ? $this->cartInstance : $this->cart);
    }

    public function removeItem($id)
    {
        $itemIndex = array_search($id, $this->cartInstance->idItems);

        if ($this->cartInstance) {
            unset($this->cartInstance->idItems[$itemIndex]);
            $this->cartInstance->total = $this->calcularPrecio();
        } else {
            unset($this->cart->idItems[$itemIndex]);
            $this->cart->total = $this->calcularPrecio();
        }

        session()->put('cart', $this->cartInstance ? $this->cartInstance : $this->cart);
    }

    private function calcularPrecio()
    {
        $total = 0;
        foreach ($this->cartInstance ? $this->cartInstance->idItems : $this->cart->idItems as $item) {
            $movie = Movie::find($item);
            $total += $movie->price;
        }

        return $total;
    }
}
