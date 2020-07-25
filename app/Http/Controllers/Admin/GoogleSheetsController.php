<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\SyncStatus;

class GoogleSheetsController extends Controller
{
    public function __invoke()
    {
        return view('admin.google-sheets.index', [
            'status' => SyncStatus::get('google_sheets_status')
        ]);
    }
}
