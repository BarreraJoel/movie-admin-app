<?php

namespace App\Livewire;

use Livewire\Component;

class Dialog extends Component
{
    public $movie;
    public string $title;
    public string $body;
    public string $confirmacion;
    public string $cancelacion;
    public function render()
    {
        return view('livewire.dialog');
    }
}
