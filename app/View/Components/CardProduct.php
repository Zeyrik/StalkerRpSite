<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class CardProduct extends Component
{
    public $id;
    public $image;
    public $title;
    public $price;

    /**
     * Create a new component instance.
     */
    public function __construct($id, $image, $title, $price)
    {
        $this->id = $id;
        $this->image = $image;
        $this->title = $title;
        $this->price = $price;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.card-product');
    }
}
