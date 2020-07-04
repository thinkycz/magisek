<?php

use App\Models\Setting;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Setting::updateOrCreate(['code' => 'store_settings'], [
            'schema' => [
                'type'       => 'object',
                'required'   => ['name', 'description', 'keywords'],
                'properties' => [
                    'name'        => ['type' => 'string'],
                    'description' => ['type' => 'string'],
                    'keywords'    => ['type' => 'string'],
                    'logo'        => ['type' => 'image'],
                    'favicon'     => ['type' => 'image'],
                ],
            ],
            'data'   => [
                'name'        => 'Pluli',
                'description' => 'Pluli Store',
                'keywords'    => 'store,ecommerce,eshop',
                'logo'        => null,
                'favicon'     => null,
            ],
        ]);

        Setting::updateOrCreate(['code' => 'company_details'], [
            'schema' => [
                'type'       => 'object',
                'required'   => ['name'],
                'properties' => [
                    'name'       => ['type' => 'string'],
                    'about'      => ['type' => 'string'],
                    'street'     => ['type' => 'string'],
                    'city'       => ['type' => 'string'],
                    'zipcode'    => ['type' => 'string'],
                    'id'         => ['type' => 'string'],
                    'vatid'      => ['type' => 'string'],
                    'email'      => ['type' => 'string'],
                    'phone'      => ['type' => 'string'],
                    'vat_payer'  => ['type' => 'boolean'],
                    'google_map' => ['type' => 'string'],
                ],
            ],
            'data'   => [
                'name'       => 'Pluli',
                'about'      => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam at sapien sit amet nunc vulputate sodales. ',
                'street'     => 'Libusska 319',
                'city'       => 'Prague 4',
                'zipcode'    => '142 00',
                'id'         => '',
                'vatid'      => '',
                'email'      => 'info@pluli.com',
                'phone'      => '',
                'vat_payer'  => false,
                'google_map' => '',
            ],
        ]);

        Setting::updateOrCreate(['code' => 'business_hours'], [
            'schema' => [
                'type'       => 'object',
                'required'   => [],
                'properties' => [
                    'mo' => ['type' => 'string'],
                    'tu' => ['type' => 'string'],
                    'we' => ['type' => 'string'],
                    'th' => ['type' => 'string'],
                    'fr' => ['type' => 'string'],
                    'sa' => ['type' => 'string'],
                    'su' => ['type' => 'string'],
                ],
            ],
            'data'   => [
                'mo' => '8:00 - 18:00',
                'tu' => '8:00 - 18:00',
                'we' => '8:00 - 18:00',
                'th' => '8:00 - 18:00',
                'fr' => '8:00 - 18:00',
                'sa' => '8:00 - 18:00',
                'su' => 'closed',
            ],
        ]);

        Setting::updateOrCreate(['code' => 'mail_configuration'], [
            'schema' => [
                'type'       => 'object',
                'required'   => [],
                'properties' => [
                    'host'         => ['type' => 'string'],
                    'port'         => ['type' => 'string'],
                    'from_address' => ['type' => 'string'],
                    'from_name'    => ['type' => 'string'],
                    'username'     => ['type' => 'string'],
                    'password'     => ['type' => 'string'],
                    'encryption'   => ['type' => 'string'],
                ],
            ],
            'data'   => [
                'host'         => 'smtp.mailtrap.io',
                'port'         => '2525',
                'from_address' => 'email@pluli.com',
                'from_name'    => 'Pluli',
                'username'     => null,
                'password'     => null,
                'encryption'   => null,
            ],
        ]);

    }
}
