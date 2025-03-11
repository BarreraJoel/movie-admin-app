<div class="card sm:card-side max-w-sm shadow-lg sm:max-w-full">
    <figure><img src="{{ asset('storage') . "/" . $movie->image_url }}" class="h-80" alt="cover_img" /></figure>
    <div class="card-body">

        <h5 class="card-title mb-2.5">
            {{ $movie->name }}
        </h5>
        <div class=" flex">
            @foreach ($movie->categories as $category)
                @include('components.badge', ['text' => $category->name])
            @endforeach
        </div>
        <p class="mb-3">
            {{ $movie->description }}
        </p>
        <div class="card-actions">
            <button class="btn btn-soft btn-primary"><span class="icon-[tabler--shopping-cart] "></span> Agregar al carrito</button>
            <a class="btn btn-soft btn-success" href="{{ route('movies.edit', ['movie' => $movie->id]) }}">
                <span class="icon-[tabler--pencil] "></span> Editar
            </a>
            <button type="button" class="btn btn-soft btn-error" aria-haspopup="dialog" aria-expanded="false"
            aria-controls="basic-modal" data-overlay="#basic-modal"><span class="icon-[tabler--x]"></span> Eliminar</button>
            
            @livewire('dialog', [
                'movie' => $movie,
                'title' => 'Confirmación', 
                'body' => '¿Esta seguro que desea eliminar la pelicula?',
                'cancelacion' => 'Cancelar',
                'confirmacion' => 'Confirmar',
                ])
        </div>

    </div>
</div>