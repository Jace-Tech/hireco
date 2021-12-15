<?php

namespace App\View\Components;

use Illuminate\View\Component;

class JobListing extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $title;
    public $date;
    public $endDate;
    public $id;
    public $job;

    public function __construct($title, $date, $endDate, $id, $job)
    {
        $this->title = $title;
        $this->date = $date;
        $this->endDate = $endDate;
        $this->id = $id;
        $this->job = $job;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.job-listing');
    }
}
