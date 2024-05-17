<?php

namespace App\View\Components;

use App\Services\WebConfig\Service;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Footer extends Component
{
    public $icons;
    /**
     * Create a new component instance.
     */
    public function __construct(Service $service)
    {
        $this->icons = $service->getIcons();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.footer');
    }
}
