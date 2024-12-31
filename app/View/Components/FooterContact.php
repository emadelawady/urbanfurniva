<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\Setting;


class FooterContact extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(public Setting $setting)
    {
        $this->setting = Setting::first();

    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.footer-contact',['setting' => $this->setting]);
    }
}
