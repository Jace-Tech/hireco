<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Applicant extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $image;
    public $firstname;
    public $lastname;
    public $country;
    public $title;
    public $applicant;
    public $countries;
    public $id;

    public function __construct($image, $firstname, $lastname, $country, $id, $title, $applicant, $countries)
    {
        $this->image = $image;
        $this->lastname = $lastname;
        $this->country = $country;
        $this->firstname = $firstname;
        $this->id = $id;
        $this->title = $title;
        $this->applicant = $applicant;
        $this->countries = $countries;

    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.applicant');
    }
}
