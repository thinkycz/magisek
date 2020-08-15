<?php

namespace App\Http\Controllers\Client\ProfileActions;

use Illuminate\Http\Request;

class UpdateAccountSettingsController
{
    public function __invoke(Request $request)
    {
        $data = collect($this->data($request))->filter(fn($item) => $item);

        currentUser()->update($data->toArray());

        return redirect()->back()->with('message', __('global.updated'));
    }

    protected function data(Request $request)
    {
        return $request->validate([
            'first_name' => 'required',
            'last_name'  => 'required',
            'email'      => 'required|email|unique:users,email,' . currentUser()->id,
            'phone'      => 'required|numeric',
            'password'   => 'sometimes|nullable|min:8|confirmed',
        ]);
    }
}
