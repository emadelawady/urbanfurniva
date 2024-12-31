<?php

namespace App\View\Components\Front\Kitchen;

use App\Models\Oven;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class OvenComponent extends Component
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

        $o_oven = Oven::all()->take(8);


        return view('components.front.kitchen.oven-component', ['o_oven' => $o_oven]);
    }
}
