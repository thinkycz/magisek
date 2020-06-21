<?php

namespace App\Http\Controllers\Landlord;

class LandingController
{
    public function __invoke()
    {
        return view('landlord.landing.index');
    }
}
