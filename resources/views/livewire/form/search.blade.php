<div>
    <form class="join w-full" wire:keyup.prevent="searchPartial" wire:submit.prevent="searchFull">
        <input type="text" wire:model="search" class="input join-item" placeholder="Buscar pelicula" />
        <button type="submit" class="btn btn-outline btn-secondary join-item"><span class="icon-[tabler--search] "></span> </button>
    </form>
</div>