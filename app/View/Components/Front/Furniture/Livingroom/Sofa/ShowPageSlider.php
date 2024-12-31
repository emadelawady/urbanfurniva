<?php

namespace App\View\Components\Front\Furniture\Livingroom\Sofa;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Collection;
use Illuminate\View\Component;

class ShowPageSlider extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public ?string $title,
        public Collection|array|null $model,
        public ?string $swiperClass,
        public ?string $swiperThumb
        )
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.front.furniture.livingroom.sofa.show-page-slider');
    }
}
