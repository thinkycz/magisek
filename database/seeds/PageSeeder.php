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
            'title'          => 'Obchodní Podmínky',
            'content'        => '',
            'hide_from_blog' => true
        ]);

        Page::create([
            'title'          => 'Ochrana osobních údajů',
            'content'        => '',
            'hide_from_blog' => true
        ]);

        Page::create([
            'title'          => 'Reklamační řád',
            'content'        => '',
            'hide_from_blog' => true
        ]);

        Page::create([
            'title'          => 'Často kladené otázky',
            'content'        => '',
            'hide_from_blog' => true
        ]);
    }
}
