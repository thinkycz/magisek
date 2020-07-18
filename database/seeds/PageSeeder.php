<?php

use App\Models\Page;
use Illuminate\Database\Seeder;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Page::create([
            'title' => 'Obchodní Podmínky',
            'content' => '',
        ]);

        Page::create([
            'title' => 'Ochrana osobních údajů',
            'content' => '',
        ]);

        Page::create([
            'title' => 'Reklamační řád',
            'content' => '',
        ]);

        Page::create([
            'title' => 'Často kladené otázky',
            'content' =>  '',
        ]);
    }
}
