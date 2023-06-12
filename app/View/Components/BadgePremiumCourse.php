<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class BadgePremiumCourse extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public bool $isPremium,
    ) {
    }


    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.badge-premium-course');
    }
}
