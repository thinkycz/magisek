<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        return view('admin.categories.index', [
            'categories' => Category::withCount('products')
                ->orderBy('position')
                ->get()
        ]);
    }

    public function show(Category $category)
    {
        return view('admin.categories.show', [
            'category' => $category,
            'products' => $category->products()->paginate()
        ]);
    }

    public function create()
    {
        return view('admin.categories.edit', [
            'category' => Category::make()
        ]);
    }

    public function store(Request $request)
    {
        Category::create($this->data($request));

        return redirect()->route('acp.categories.index');
    }

    public function edit(Category $category)
    {
        return view('admin.categories.edit', [
            'category' => $category
        ]);
    }

    public function update(Category $category, Request $request)
    {
        $category->update($this->data($request));

        return redirect()->route('acp.categories.index');
    }

    public function destroy(Category $category)
    {
        $category->delete();

        return redirect()->route('acp.categories.index');
    }

    protected function data(Request $request)
    {
        return $request->validate([
            'name'         => 'required',
            'position'     => 'required|numeric',
            'color'        => 'sometimes|nullable',
            'show_in_menu' => 'boolean',
            'is_featured'  => 'boolean',
            'enabled'      => 'boolean'
        ]);
    }
}
