<?php

namespace App\View\Components\Front\Kitchens;

use App\Models\Kitchen;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Best extends Component
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
        $kitchen_best = Kitchen::all()->take(4);

        return view('components.front.kitchens.best', ['kitchen_best' => $kitchen_best]);
    }
}
