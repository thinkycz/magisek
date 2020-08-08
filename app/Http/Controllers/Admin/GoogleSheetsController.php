<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class GoogleSheetsController extends Controller
{
    public function __invoke()
    {
        return view('admin.google-sheets.index');
    }
}
