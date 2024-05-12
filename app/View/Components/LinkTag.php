<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class LinkTag extends Component
{
    public $href;
    public $text;
    public $id;
    /**
     * Create a new component instance.
     */
    public function __construct($href, $text, $id)
    {
        $this->href = $href;
        $this->text = $text;
        $this->id = $id;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.link-tag');
    }
}
