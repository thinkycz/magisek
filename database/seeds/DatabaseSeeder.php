<?php

use App\Models\Category;
use App\Models\User;
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
        factory(User::class)->create(['email' => 'leo@nulisec.com']);
        factory(Category::class, 3)->create();

        $this->call(AvailabilitySeeder::class);
        $this->call(CountrySeeder::class);
        $this->call(CurrencySeeder::class);
        $this->call(PropertyTypeSeeder::class);
        $this->call(StatusSeeder::class);
        $this->call(DeliveryMethodSeeder::class);
        $this->call(PaymentMethodSeeder::class);
        $this->call(PriceLevelSeeder::class);
        $this->call(UnitSeeder::class);
        $this->call(PreferenceSeeder::class);
        $this->call(SettingSeeder::class);
        $this->call(PageSeeder::class);
    }
}
