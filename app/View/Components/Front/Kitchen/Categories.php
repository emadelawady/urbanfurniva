<?php

namespace App\View\Components\Front\Kitchen;

use App\Models\RangeHood;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Categories extends Component
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

        $rangeHood = RangeHood::all()->take(4);



        return view('components.front.kitchen.categories',['rangeHood' => $rangeHood]);
    }
}
