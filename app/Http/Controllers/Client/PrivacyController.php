<?php

namespace App\Http\Controllers\Client;

class PrivacyController
{
    public function __invoke()
    {
        return view('client.privacy.index');
    }
}
