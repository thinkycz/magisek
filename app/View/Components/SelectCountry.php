<?php

namespace App\View\Components;

use App\Models\Country;
use Illuminate\View\Component;

class SelectCountry extends Component
{
    public $countries;
    public $name;
    public $title;
    public $value;
    public $required;

    public function __construct($name, $title, $value = '', $required = false)
    {
        $this->countries = Country::where('enabled', true)->get();
        $this->name = $name;
        $this->title = $title;
        $this->value = $value ?: preferenceRepository()->getDefaultCountry()->id;
        $this->required = $required;
    }

    public function render()
    {
        return view('components.select-country');
    }
}
