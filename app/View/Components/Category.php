<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Category extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $icon;
    public $category;
    public $jobs;

    public function __construct($icon, $category, $jobs)
    {
        $this->icon = $icon;
        $this->category = $category;
        $this->jobs = $jobs;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.category');
    }
}
