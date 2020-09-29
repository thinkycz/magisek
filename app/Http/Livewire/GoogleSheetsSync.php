<?php

namespace App\Http\Livewire;

use App\Jobs\SyncCsvFromGoogleSheets;
use App\Services\SyncStatus;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Livewire\Component;
use App\Models\Setting;
use Illuminate\Support\Facades\Validator;

class GoogleSheetsSync extends Component
{
    use DispatchesJobs;

    public function render()
    {
        return view('livewire.google-sheets-sync', [
            'status' => SyncStatus::get('google_sheets_status')
        ]);
    }

    public function sync()
    {
        $settings = Setting::loadConfiguration('google_sheets_importer') ?? [];

        Validator::make($settings, [
            'link'       => 'required',
            'identifier' => 'required',
        ])->validate();

        if (SyncStatus::get('google_sheets_status')->eligibleToRun()) {
            $this->dispatch(new SyncCsvFromGoogleSheets());
        }
    }
}
