<?php

namespace App\Livewire\Form;

use Livewire\Component;

class Checkbox extends Component
{
    public $selected = [];
    public $data;
    public $input_text;
    public $input_name;
    public $value;

    public function mount(
        // $data,
        // $input_name,
        // $input_text,
        // $value
    ) {
        // $this->data = $data;
        // $this->input_name = $input_name;
        // $this->input_text = $input_text;
    }

    public function render()
    {
        return view('livewire.form.checkbox');
    }
}
