<?php

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name' => 'Ponožky',
        ]);

        Category::create([
            'name' => 'Hračky',
        ]);

        Category::create([
            'name' => 'Potraviny',
        ]);
    }
}
