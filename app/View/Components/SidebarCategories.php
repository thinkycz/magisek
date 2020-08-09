<?php

namespace App\View\Components;

use App\Models\Category;
use Illuminate\View\Component;

class SidebarCategories extends Component
{
    public function render()
    {
        return view('components.sidebar-categories', [
            'categories' => Category::query()
                ->whereEnabled(true)
                ->orderBy('position')
                ->get()
                ->toTree()
        ]);
    }
}
