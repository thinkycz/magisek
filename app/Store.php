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
        static::deleting(fn(Store $store) => $store->dropDatabase());
    }

    public function createDatabase()
    {
        DB::connection($this->landlordDatabaseConnectionName())
            ->statement("CREATE DATABASE {$this->getDatabaseName()}");
    }

    public function migrateDatabase()
    {
        $this->makeCurrent();

        Artisan::call('migrate', ['--database' => $this->tenantDatabaseConnectionName()]);
    }

    public function dropDatabase()
    {
        DB::connection($this->landlordDatabaseConnectionName())
            ->statement("DROP DATABASE IF EXISTS {$this->getDatabaseName()}");
    }
}
