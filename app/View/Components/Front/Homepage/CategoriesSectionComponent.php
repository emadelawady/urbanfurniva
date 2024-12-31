<?php

namespace App\View\Components\Front\Homepage;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\View\Component;

class CategoriesSectionComponent extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string|null $sectionTitle = '',
        public string|array|Collection|null $model = [],
        )
    {

    }


    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.front.homepage.categories-section-component');
    }
}
