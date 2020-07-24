<?php

namespace App\Http\Controllers\Admin\GoogleSheetsActions;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ConfigureController extends Controller
{
    public function index()
    {
        return view('admin.google-sheets.configure', [
            'settings' => collect(Setting::loadConfiguration('google_sheets_importer'))
        ]);
    }

    public function store(Request $request)
    {
        Setting::saveConfiguration('google_sheets_importer', $this->data($request));

        return redirect()->route('acp.google-sheets.index');
    }

    protected function data(Request $request)
    {
        return $request->validate([
            'link'       => ['required', 'url'],
            'identifier' => ['required', Rule::in(['catalog', 'barcode'])],
            'run_daily'  => ['boolean']
        ]);
    }
}
