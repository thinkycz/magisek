<?php

namespace App\Multitenancy;

use Illuminate\Support\Facades\File;
use Spatie\Multitenancy\Models\Tenant;
use Spatie\Multitenancy\Tasks\SwitchTenantTask;

class SwitchFilesystemsTask implements SwitchTenantTask
{
    public function makeCurrent(Tenant $tenant): void
    {
        $name = $tenant->getDatabaseName();
        $storagePath = storage_path("app/{$name}");
        $publicPath = storage_path("app/public/{$name}");

        if (!File::exists($storagePath)) {
            File::makeDirectory($storagePath, 0755, true);
        }

        if (!File::exists($publicPath)) {
            File::makeDirectory($publicPath, 0755, true);
        }

        config([
            "app.url"                       => request()->getSchemeAndHttpHost(),
            "filesystems.disks.public.url"  => request()->getSchemeAndHttpHost() . "/storage/{$name}",
            "filesystems.disks.public.root" => $publicPath,
            "filesystems.disks.local.root"  => $storagePath,
            "scout.tntsearch.storage"       => $storagePath
        ]);
    }

    public function forgetCurrent(): void
    {
        config([
            "app.url"                       => env('APP_URL'),
            "filesystems.disks.public.url"  => env('APP_URL') . '/storage',
            "filesystems.disks.public.root" => storage_path('app/public'),
            "filesystems.disks.local.root"  => storage_path('app'),
            "scout.tntsearch.storage"       => storage_path('app')
        ]);
    }
}
