<?php

namespace App\View\Components\Front\Kitchen;

use App\Models\Troll;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class TrollComponent extends Component
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

        $t_rolls = Troll::all()->take(8);



        // dd($rangeHood);

        return view('components.front.kitchen.troll-component', ['t_rolls' => $t_rolls]);
    }
}
