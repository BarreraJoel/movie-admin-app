<?php

namespace App\Livewire;

use Livewire\Component;

class BackButton extends Component
{
    public $route;

    public function render()
    {
        return view('livewire.back-button');
    }

}
