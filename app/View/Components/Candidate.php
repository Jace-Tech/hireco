<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Candidate extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $applicant;
    public function __construct($applicant)
    {
        $this->applicant = $applicant;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.candidate');
    }
}
