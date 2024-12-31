<?php

namespace App\View\Components\Front\Kitchen;

use App\Models\BurnerGas;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class BurnerGasComponent extends Component
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

        $burnergas = BurnerGas::all()->take(8);



        // dd($rangeHood);


        return view('components.front.kitchen.burner-gas-component', ['burnergas' => $burnergas]);

    }
}
