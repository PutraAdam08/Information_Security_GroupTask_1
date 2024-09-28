<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class formInput extends Component
{
    /**
     * Create a new component instance.
     */
    public $name;
    public $label;
    public $value;
    public $id;

    /**
     * Create a new component instance.
     *
     * @param string $name
     * @param string $label
     * @param string|null $value
     * @param string|null $id
     * @return void
     */
    public function __construct($name, $label, $value = null, $id = null)
    {
        $this->name = $name;
        $this->label = $label;
        $this->value = $value;
        $this->id = $id;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.form-input');
    }
}
