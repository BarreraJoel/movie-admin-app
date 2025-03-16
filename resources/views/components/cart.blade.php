<div id="cart" class="overlay overlay-open:translate-x-0 drawer drawer-end hidden" role="dialog" tabindex="-1">
    <div class="drawer-header">
        <h3 class="drawer-title">Carrito</h3>
        <button type="button" class="btn btn-text btn-circle btn-sm absolute end-3 top-3" aria-label="Close" data-overlay="#cart">
            <span class="icon-[tabler--x] size-5"></span>
        </button>
    </div>
    <div class="drawer-body">
        @if ($cartService->cartInstance && count($cartService->getItems()) > 0)
            <ul>
                @foreach ($cartService->getItems() as $item)
                    <li>
                        @livewire('cart.item-cart', [
                            'movie' => $cartService->cast($item)
                        ])
                    </li>
                @endforeach
            </ul>
        @else
            <h4>El carrito está vacío</h4>
        @endif
    </div>
    <div class="drawer-footer flex flex-col">
        <div class="w-full flex justify-between">
            <h4><strong>Total:</strong></h4>
            @if ($cartService->cartInstance)
                <p>${{ $cartService->cartInstance->total }}</p>
            @endif
        </div>
        <div class="w-full">
            <a href="{{ route('cart.index') }}" class="btn btn-accent w-full">
                Finalizar Compra
            </a>
        </div>
    </div>
</div>