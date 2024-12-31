<?php

namespace App\View\Components\Front\Furnitures;

use App\Models\Furniture;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class BestFurniture extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $furniture_best = Furniture::all()->take(4);

        return view('components.front.furnitures.best-furniture', ['furniture_best' => $furniture_best]);
    }
}
