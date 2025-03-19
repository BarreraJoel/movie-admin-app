<div class="w-3/4 m-auto">
    <div class="">
        <div class="mt-8 overflow-x-auto">
            @if (count($movies) > 0)
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Pelicula</th>
                                <th>Precio</th>
                                <th>Categorias</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($movies as $movie)
                                <tr>
                                    <td>
                                        <div class="flex items-center gap-3">
                                            <div class="avatar">
                                                <div class="bg-base-content/10 h-10 w-10 rounded-md">
                                                    <img src="{{ asset('storage') . '/' . $movie->image_url }}" alt="image" />
                                                </div>
                                            </div>
                                            <div>
                                                <div class="text-sm opacity-50">{{ $movie->name }}</div>
                                                <div class="font-medium">{{ $movie->description }}</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>${{ $movie->price }}</td>
                                    <td>
                                        @foreach ($movie->categories as $category)
                                            <span class="badge badge-soft  text-xs">{{ $category->name }}</span>
                                        @endforeach
                                    </td>
                                    <td class="flex">
                                        <a href="{{ route('movies.show', $movie) }}"
                                            class="btn btn-square btn-soft btn-success btn-sm" aria-label="Action button">
                                            <span class="icon-[tabler--eye] size-5"> ver</span>
                                        </a>
                                        @livewire('cart.btn-add-item', ['itemId' => $movie->id])
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            @else
                No se encontraron resultados
            @endif
    </div>
</div>