<?php

namespace App\View\Components\Front\Kitchens;

use App\Models\Kitchen;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Random extends Component
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
        $kitchens_random = Kitchen::all()->random(4);

        return view('components.front.kitchens.random', ['kitchens_random' => $kitchens_random]);
    }
}
