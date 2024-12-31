<?php

namespace App\View\Components\Front\Kitchen;

use App\Models\Sink;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class SinkComponent extends Component
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

        $s_ink = Sink::all()->take(8);


        return view('components.front.kitchen.sink-component', ['s_ink' => $s_ink]);
    }
}
