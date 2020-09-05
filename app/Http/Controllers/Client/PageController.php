<?php

namespace App\Http\Controllers\Client;

use App\Models\Page;

class PageController
{
    public function index()
    {
        return view('client.pages.index', [
            'pages' => Page::where('hide_from_blog', false)->paginate()
        ]);
    }

    public function show(Page $page)
    {
        return view('client.pages.show', [
            'page' => $page
        ]);
    }
}
