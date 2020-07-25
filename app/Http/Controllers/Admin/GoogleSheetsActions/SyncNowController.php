<?php

namespace App\Http\Controllers\Admin\GoogleSheetsActions;

use App\Http\Controllers\Controller;
use App\Jobs\SyncCsvFromGoogleSheets;
use App\Models\Setting;
use Illuminate\Support\Facades\Validator;

class SyncNowController extends Controller
{
    public function __invoke()
    {
        $settings = Setting::loadConfiguration('google_sheets_importer') ?? [];

        Validator::make($settings, [
            'link'       => 'required',
            'identifier' => 'required',
        ])->validate();

        $this->dispatch(new SyncCsvFromGoogleSheets());

        return redirect()->back()->with('message', 'Sync in progress');
    }
}
