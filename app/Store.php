<?php

namespace App;

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\DB;
use Spatie\Multitenancy\Models\Tenant;

class Store extends Tenant
{
    protected $table = 'tenants';

    public static function booted()
    {
        static::creating(fn(Store $store) => $store->createDatabase());
        static::created(fn(Store $store) => $store->migrateDatabase());
    }

    public function createDatabase()
    {
        DB::connection($this->landlordDatabaseConnectionName())
            ->statement("CREATE DATABASE {$this->getDatabaseName()}");
    }

    public function migrateDatabase()
    {
        $this->makeCurrent();

        Artisan::call('migrate', ['--database' => $this->tenantDatabaseConnectionName(), '--path' => 'database/migrations']);
        Artisan::call('db:seed', ['--database' => $this->tenantDatabaseConnectionName()]);
    }
}
