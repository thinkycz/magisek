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
    }
}
