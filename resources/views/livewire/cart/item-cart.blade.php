<div class="flex">
    <div class="w-1/4 h-full">
        <img src="{{ asset('storage') . '/' . $movie->image_url }}" alt="" class="h-24 rounded-md">
    </div>
    <div class="h-full flex flex-col w-3/4 ml-3">
        <div class="h-4/5 flex w-full">
            <div class="w-2/3">
                <p><strong>{{ $movie->name }}</strong></p>
            </div>
            <div class="text-end  w-1/3">
                <p>
                    <form wire:submit.prevent="removeItem({{ $movie->id }})">
                        @csrf
                        <button type="submit" class="text-error">
                            Quitar
                        </button>
                    </form>
                </p>
            </div>
        </div>
        <div class="h-1/5 ">
            <p>${{ $movie->price }}</p>
        </div>
    </div>
</div>