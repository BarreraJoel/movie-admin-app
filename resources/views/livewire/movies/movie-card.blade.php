<div class="card rounded-2xl sm:card-side max-w-sm w-4/5 m-auto shadow-lg sm:max-w-full bg-slate-900">
    <div class="w-2/6">
        <figure><img src="{{ asset('storage') . "/" . $movie->image_url }}" class="h-full rounded-2xl" alt="cover_img" /></figure>
    </div>
    
    <div class="card-body w-4/6">

        <div class="h-5/6">
            <h5 class="card-title mb-2.5">
                {{ $movie->name }}
            </h5>
            <h6 class="text-secondary">
                {{ $movie->age }}
            </h6>
            <div class="flex">
                @foreach ($movie->categories as $category)
                    @include('components.badge', ['text' => $category->name])
                @endforeach
            </div>
            <p class="mb-3">
                {{ $movie->description }}
            </p>    
        </div>
        <div class="card-actions flex self-end h-1/6">
            <form wire:submit.prevent='addItem({{ $movie->id }})'>
                @csrf
                <button type="submit" class="btn btn-soft btn-primary"><span class="icon-[tabler--shopping-cart] "></span> Agregar al carrito</button>
            </form>
                
            @can('edit-movie')
                <a class="btn btn-soft btn-success" href="{{ route('movies.edit', ['movie' => $movie]) }}">
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
            @endcan
        </div>

    </div>
</div>