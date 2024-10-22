<?php

namespace App\View\Components\Atoms;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class InputText extends Component
{
    public $id;
    public $name;
    public $label;
    public $value;
    public $type;
    public $placeholder;
    public $required;
    public $disabled;
    public $inputClass;

    public function __construct(
        $id = null,
        $name = '',
        $label = null,
        $value = '',
        $type = 'text',
        $placeholder = '',
        $required = false,
        $disabled = false,
        $inputClass = ''
    ) {
        $this->id = $id;
        $this->name = $name;
        $this->label = $label;
        $this->value = $value;
        $this->type = $type;
        $this->placeholder = $placeholder;
        $this->required = $required;
        $this->disabled = $disabled;
        $this->inputClass = $inputClass;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.atoms.input-text');
    }
}
