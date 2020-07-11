<?php

namespace App\Http\Controllers\Client\ProfileActions;

use Illuminate\Http\Request;

class UpdateAccountSettingsController
{
    public function __invoke(Request $request)
    {

    }

    protected function data(Request $request)
    {
        return $request->validate([
            'first_name' => 'required',
            'last_name'  => 'required',
            'email'      => 'required',
            'phone'      => 'required',
            'password'   => 'sometimes|confirmed',
        ]);
    }
}
