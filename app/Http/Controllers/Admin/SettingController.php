<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function index()
    {
        return view('admin.settings.index', [
            'settings' => Setting::paginate()
        ]);
    }

    public function edit(Setting $setting)
    {
        return view('admin.settings.edit', [
            'setting' => $setting,
            'schema'  => $setting->schema,
            'data'    => $setting->data
        ]);
    }

    public function update(Setting $setting, Request $request)
    {
        $setting->update($this->data($request));

        return redirect()->route('acp.settings.index');
    }

    protected function data(Request $request)
    {
        return $request->validate([
            'data' => 'required|array'
        ]);
    }
}
