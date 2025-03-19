<?php

namespace App\Livewire\Form;

use App\Services\MovieService;
use Livewire\Component;

class Search extends Component
{
    public string $search;

    public function render()
    {
        return view('livewire.form.search');
    }

    public function searchPartial()
    {
        if (!empty($this->search)) {
            
        }
    }

    public function searchFull()
    {
        if (!empty($this->search)) {
            return redirect()
                ->route('results', [
                    'search' => $this->search
                ]);
        }
    }
}
