<div>
    @if (count($movies) > 0)
        <div class="w-full overflow-x-auto overflow-y-auto">
            <table class="table">
                <thead>
                    <tr>
                        <th>Pelicula</th>
                        <th>Precio</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($movies as $movie)
                        <tr>
                            <td>{{ $movie->name }}</td>
                            <td>$ {{ $movie->price }}</td>
                            <td>
                                <form wire:submit.prevent="removeItem({{ $movie->id }})">
                                    @csrf
                                    <button type="submit" class="text-error">
                                        Quitar
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @else
        <h5>El carrito está vacío</h5>
    @endif
</div>