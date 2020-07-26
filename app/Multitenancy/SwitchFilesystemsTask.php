<?php

namespace App\Multitenancy;

use Spatie\Multitenancy\Models\Tenant;
use Spatie\Multitenancy\Tasks\SwitchTenantTask;

class SwitchFilesystemsTask implements SwitchTenantTask
{
    public function makeCurrent(Tenant $tenant): void
    {
        $name = $tenant->getDatabaseName();

        config([
            "app.url" => request()->getSchemeAndHttpHost(),
            "filesystems.disks.local.root" => storage_path("app/{$name}"),
            "filesystems.disks.public.root" => storage_path("app/public/{$name}"),
            "filesystems.disks.public.url" => request()->getSchemeAndHttpHost() . "/storage/{$name}",
        ]);
    }

    public function forgetCurrent(): void
    {
        config([
            "app.url" => env('APP_URL'),
            "filesystems.disks.local.root" => storage_path('app'),
            "filesystems.disks.public.root" => storage_path('app/public'),
            "filesystems.disks.public.url" => env('APP_URL').'/storage',
        ]);
    }
}
