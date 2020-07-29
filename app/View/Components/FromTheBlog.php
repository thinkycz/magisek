<?php

namespace App\View\Components;

use App\Models\Page;
use Illuminate\View\Component;

class FromTheBlog extends Component
{
    public $pages;

    public function __construct()
    {
        $this->pages = Page::where('hide_from_blog', false)->take(3)->latest()->get();
    }

    public function render()
    {
        return view('components.from-the-blog');
    }
}
