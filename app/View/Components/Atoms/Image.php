<?php

namespace App\View\Components\Atoms;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Image extends Component
{
    public $src;
    public $alt;
    public $width;
    public $height;

    /**
     * Create a new component instance.
     */
    public function __construct(string $src,string $alt,?int $width = null,?int $height = null)
    {
        $this->src = $src;
        $this->alt = $alt;
        $this->width = $width;
        $this->height = $height;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.atoms.image');
    }
}
