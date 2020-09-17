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
                ->where('enabled', true)
                ->where('show_in_menu', true)
                ->orderByDesc('position')
                ->get()
                ->toTree()
        ]);
    }
}
