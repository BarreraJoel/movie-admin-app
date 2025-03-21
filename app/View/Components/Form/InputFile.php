<?php

namespace App\View\Components\Form;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class InputFile extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $input_name,
        public string $input_text,
        public array $errors = []
    ) {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.form.input-file');
    }
}
