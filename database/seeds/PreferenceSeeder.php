<?php

use App\Models\Availability;
use App\Models\Country;
use App\Models\Currency;
use App\Models\Page;
use App\Models\Preference;
use App\Models\PriceLevel;
use App\Models\Status;
use App\Models\Unit;
use Illuminate\Database\Seeder;

class PreferenceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Preference::updateOrCreate(['code' => 'default_country'], [
            'preferable_id'   => Country::whereIsocode3('CZE')->first()->id,
            'preferable_type' => Country::class,
        ]);

        Preference::updateOrCreate(['code' => 'default_currency'], [
            'preferable_id'   => Currency::whereIsocode('CZK')->first()->id,
            'preferable_type' => Currency::class,
        ]);

        Preference::updateOrCreate(['code' => 'default_price_level'], [
            'preferable_id'   => PriceLevel::first()->id,
            'preferable_type' => PriceLevel::class,
        ]);

        Preference::updateOrCreate(['code' => 'default_availability_in_stock'], [
            'preferable_id'   => Availability::whereCode('in-stock')->first()->id,
            'preferable_type' => Availability::class,
        ]);

        Preference::updateOrCreate(['code' => 'default_availability_out_of_stock'], [
            'preferable_id'   => Availability::whereCode('out-of-stock')->first()->id,
            'preferable_type' => Availability::class,
        ]);

        Preference::updateOrCreate(['code' => 'default_quantitative_unit'], [
            'preferable_id'   => Unit::whereCode('piece')->first()->id,
            'preferable_type' => Unit::class,
        ]);

        Preference::updateOrCreate(['code' => 'created_order_status'], [
            'preferable_id'   => Status::whereCode('waiting-for-confirmation')->first()->id,
            'preferable_type' => Status::class,
        ]);

        Preference::updateOrCreate(['code' => 'confirmed_order_status'], [
            'preferable_id'   => Status::whereCode('confirmed')->first()->id,
            'preferable_type' => Status::class,
        ]);

        Preference::updateOrCreate(['code' => 'cancelled_order_status'], [
            'preferable_id'   => Status::whereCode('cancelled')->first()->id,
            'preferable_type' => Status::class,
        ]);

        Preference::updateOrCreate(['code' => 'completed_order_status'], [
            'preferable_id'   => Status::whereCode('completed')->first()->id,
            'preferable_type' => Status::class,
        ]);
    }
}
