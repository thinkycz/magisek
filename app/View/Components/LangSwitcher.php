<?php

namespace App\View\Components;

use App\Enums\Locale;
use Illuminate\View\Component;

class LangSwitcher extends Component
{
    public $locales;
    public $current;

    public function __construct()
    {
        $this->locales = Locale::all();
        $this->current = Locale::translation(Locale::current());
    }

    public function render()
    {
        return view('components.lang-switcher');
    }
}
