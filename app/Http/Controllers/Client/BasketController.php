<?php

namespace App\Http\Controllers\Client;

class BasketController
{
    public function __invoke()
    {
        return view('client.baskets.index');
    }
}
