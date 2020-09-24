<?php

namespace App\View\Components;

use App\Models\Category;
use Illuminate\View\Component;

class FeaturedProducts extends Component
{
    public $categories;

    public function __construct()
    {
        $this->categories = Category::query()
            ->where('is_featured', true)
            ->where('enabled', true)
            ->orderByDesc('position')
            ->get();
    }

    public function render()
    {
        return view('components.featured-products');
    }
}
