<?php

namespace App\Http\Controllers\Client;

use App\Models\Category;

class CategoryController
{
    public function index()
    {
        return view('client.categories.index');
    }

    public function show(Category $category)
    {
        return view('client.categories.show', [
            'category' => $category
        ]);
    }
}
