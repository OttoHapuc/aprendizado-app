<?php

namespace App\View\Components\Atoms;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class InputSelect extends Component
{
    public $id;
    public $name;
    public $label;
    public $placeholder;
    public $options;
    public $value;
    public $required;
    public $disabled;
    public $selectClass;

    public function __construct(
        $id = null,
        $name = null,
        $label = null,
        $placeholder = null,
        $options = [],
        $value = null,
        $required = false,
        $disabled = false,
        $selectClass = ''
    ) {
        $this->id = $id;
        $this->name = $name;
        $this->label = $label;
        $this->placeholder = $placeholder;
        $this->options = $options;
        $this->value = $value;
        $this->required = $required;
        $this->disabled = $disabled;
        $this->selectClass = $selectClass;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.atoms.input-select');
    }
}
