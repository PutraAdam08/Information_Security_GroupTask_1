<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class button extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(public string $color="blue-500", public string $colorHv="blue-700", public $onClick=null, public string $type="")
    {
        $this->color = $color;
        $this->colorHv = $colorHv;
        $this->onClick = $onClick;
        $this->type = $type;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.button');
    }
}
