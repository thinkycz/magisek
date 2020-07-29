<?php

namespace App\Multitenancy;

use Illuminate\Support\Facades\DB;
use Spatie\Multitenancy\Models\Tenant;
use Spatie\Multitenancy\Tasks\SwitchTenantDatabaseTask;

class SwitchDatabasesTask extends SwitchTenantDatabaseTask
{
    public function makeCurrent(Tenant $tenant): void
    {
        parent::makeCurrent($tenant);

        DB::setDefaultConnection($this->tenantDatabaseConnectionName());
    }

    public function forgetCurrent(): void
    {
        parent::forgetCurrent();

        DB::setDefaultConnection($this->landlordDatabaseConnectionName());
    }
}
