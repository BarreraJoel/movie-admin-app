<div class="card group h-96 bg-red-300 hover:shadow">
    <figure>
        <a href="{{ route('movies.show', $movie) }}">
            <img src="{{ asset('storage') . "/" . $movie->image_url }}" class=" transition-transform duration-500 group-hover:scale-110 h-96 w-full" alt="cover_img" />
        </a>
    </figure>
</div>