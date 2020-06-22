<?php

namespace App\Http\Controllers\Client;

class HomeController
{
    public function __invoke()
    {
        return view('client.home.index');
    }
}
