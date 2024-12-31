<?php

namespace App\View\Components\Front\Homepage;

use App\Models\Furniture;
use App\Models\LivingRoom;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class NewFurnitureItems extends Component
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
        $new_furniture = LivingRoom::all()->take(6);

        return view('components.front.homepage.new-furniture-items', ['new_furniture' => $new_furniture]);
    }
}
