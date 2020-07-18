<?php

use Illuminate\Database\Seeder;

class LandlordSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\User::class)->create(['email' => 'leo@nulisec.com']);

        DB::connection('landlord')->statement('DROP DATABASE IF EXISTS magisek');

        \App\Store::create([
            'name'     => 'Magisek',
            'domain'   => 'magisek.test',
            'database' => 'magisek'
        ]);
    }
}
