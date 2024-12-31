<?php

namespace App\View\Components;

use App\Models\Setting;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Route;
use Illuminate\View\Component;

class Footer extends Component
{

    // /**
    //  * Create a new component instance.
    //  */
    public function __construct(public Setting $setting)
    {
        $this->setting = Setting::first();
    }


    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {


        return view('components.footer', ['setting' => $this->setting]);

    }
}
