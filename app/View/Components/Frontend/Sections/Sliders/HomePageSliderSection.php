<?php

namespace App\View\Components\Frontend\Sections\Sliders;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class HomePageSliderSection extends Component
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
        return view('components.frontend.sections.sliders.home-page-slider-section');
    }
}
