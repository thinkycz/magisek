<?php

namespace App\Http\Controllers\Client;

use App\Models\Page;

class PageController
{
    public function __invoke(Page $page)
    {
        return view('client.pages.show', [
            'page' => $page
        ]);
    }
}
