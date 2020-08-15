<?php

namespace App\Http\Controllers\Client\ProfileActions;

use Illuminate\Http\Request;

class UpdateSubscriptionSettingsController
{
    public function __invoke(Request $request)
    {
        currentUser()->update($this->data($request));

        return redirect()->back()->with('message', __('global.updated'));
    }

    protected function data(Request $request)
    {
        return $request->validate([
            'receive_newsletter' => 'boolean',
        ]);
    }
}
