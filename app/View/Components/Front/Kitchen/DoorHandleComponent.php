<?php

namespace App\View\Components\Front\Kitchen;

use App\Models\DoorHandle;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class DoorHandleComponent extends Component
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

        $doorHandle = DoorHandle::all()->take(8);


        return view('components.front.kitchen.door-handle-component', ['doorHandle' => $doorHandle]);
    }
}
