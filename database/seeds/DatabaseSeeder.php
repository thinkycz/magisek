<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Models\User::class)->create(['email' => 'leo@nulisec.com']);

        $this->call(AvailabilitySeeder::class);
        $this->call(CountrySeeder::class);
        $this->call(CurrencySeeder::class);
        $this->call(PropertyTypeSeeder::class);
        $this->call(StatusSeeder::class);
    }
}
