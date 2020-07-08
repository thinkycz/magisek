<?php

namespace App\Http\Controllers\Client;

class ProfileController
{
    public function __invoke()
    {
        return view('client.profile.index');
    }
}
