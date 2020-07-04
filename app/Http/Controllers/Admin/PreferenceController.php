<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Preference;
use Illuminate\Http\Request;

class PreferenceController extends Controller
{
    public function index()
    {
        return view('admin.preferences.index', [
            'preferences' => Preference::paginate()
        ]);
    }

    public function edit(Preference $preference)
    {
        return view('admin.preferences.edit', [
            'preference' => $preference,
            'options'    => $preference->preferable_type::all()
        ]);
    }

    public function update(Preference $preference, Request $request)
    {
        $preference->update($this->data($request));

        return redirect()->route('acp.preferences.index');
    }

    protected function data(Request $request)
    {
        return $request->validate([
            'value' => 'required'
        ]);
    }
}
