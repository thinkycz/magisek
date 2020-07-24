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
        Validator::make(Setting::loadConfiguration('google_sheets_importer') ?? [], [
            'link'       => 'required',
            'identifier' => 'required',
        ])->validate();

        $this->dispatch(new SyncCsvFromGoogleSheets());

        return redirect()->back()->with('message', 'Sync in progress');
    }
}
