<?php

namespace App\View\Components\Front\Furniture;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class FurnitureCategoriesComponent extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
            public string | array | null $attr = []
        )
    {


    }



    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {

        // dd($this->data);

        return view('components.front.furniture.furniture-categories-component');
    }
}
