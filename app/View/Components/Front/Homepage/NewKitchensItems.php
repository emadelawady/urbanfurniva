<?php

namespace App\View\Components\Front\Homepage;

use App\Models\Kitchen;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class NewKitchensItems extends Component
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

        $new_kitchens = Kitchen::all()->take(6);

        return view('components.front.homepage.new-kitchens-items', ['new_kitchens' => $new_kitchens]);

    }
}
