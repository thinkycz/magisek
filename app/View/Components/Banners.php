<?php

namespace App\View\Components;

use App\Models\Banner;
use Illuminate\View\Component;

class Banners extends Component
{
    public $banners;

    public function __construct()
    {
        $this->banners = Banner::query()
            ->where('enabled', true)
            ->get();
    }

    public function render()
    {
        return view('components.banners');
    }
}
