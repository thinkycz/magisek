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
                'name'       => 'Magisek',
                'about'      => 'Kouzelný svět dětí',
                'street'     => 'Libušská 319/126',
                'city'       => 'Praha 4',
                'zipcode'    => '142 00',
                'id'         => '12345678',
                'vatid'      => 'CZ12345678',
                'email'      => 'info@pluli.com',
                'phone'      => '+420 123 456 789',
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

        Setting::updateOrCreate(['code' => 'shopping_policy'], [
            'schema' => [
                'type'       => 'object',
                'required'   => [],
                'properties' => [
                    'company_id_required'       => ['type' => 'boolean'],
                    'hide_out_of_stock'         => ['type' => 'boolean'],
                    'hide_prices_for_guests'    => ['type' => 'boolean'],
                    'allow_residual_qty_orders' => ['type' => 'boolean'],
                ],
            ],
            'data'   => [
                'company_id_required'       => false,
                'hide_out_of_stock'         => false,
                'hide_prices_for_guests'    => false,
                'allow_residual_qty_orders' => false,
            ],
        ]);

        Setting::updateOrCreate(['code' => 'footer_links'], [
            'schema' => [
                'type'       => 'object',
                'required'   => [],
                'properties' => [
                    'link_1_title' => ['type' => 'string'],
                    'link_1_url'   => ['type' => 'string'],
                    'link_2_title' => ['type' => 'string'],
                    'link_2_url'   => ['type' => 'string'],
                    'link_3_title' => ['type' => 'string'],
                    'link_3_url'   => ['type' => 'string'],
                    'link_4_title' => ['type' => 'string'],
                    'link_4_url'   => ['type' => 'string'],
                ],
            ],
            'data'   => [
                'link_1_title' => 'Link 1',
                'link_1_url'  => null,
                'link_2_title' => 'Link 2',
                'link_2_url'  => null,
                'link_3_title' => 'Link 3',
                'link_3_url'  => null,
                'link_4_title' => 'Link 4',
                'link_4_url'  => null,
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
