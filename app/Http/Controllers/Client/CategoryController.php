<?php

namespace App\Http\Controllers\Client;

use App\Models\Category;

class CategoryController
{
    public function index()
    {
        return view('client.categories.index', [
            'categories' => Category::query()
                ->whereHas('products')
                ->withCount('products')
                ->paginate()
        ]);
    }

    public function show(Category $category)
    {
        return view('client.categories.show', [
            'category' => $category,
            'products' => $category->products()->paginate()
        ]);
    }
}
