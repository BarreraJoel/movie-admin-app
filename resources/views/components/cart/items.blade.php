<div>
    @if (count($movies) > 0)
        @foreach ($movies as $movie)
            @livewire('cart.item-cart', compact('movie'))
        @endforeach
    @else
        <h5>El carrito está vacío</h5>
    @endif
</div>