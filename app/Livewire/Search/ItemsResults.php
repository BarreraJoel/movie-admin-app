<?php

namespace App\Livewire\Search;

use App\Services\MovieService;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Component;

class ItemsResults extends Component
{
    public string $search;
    private MovieService $movieService;
    public Collection $movies;

    public function boot(MovieService $movieService) {
        $this->movieService = $movieService;
    }

    public function mount() {
        $this->findMovies();
    }

    public function render()
    {
        return view('livewire.search.items-results');
    }

    private function findMovies() {
        $this->movies = $this->movieService->findByName($this->search);
    }

}
