<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Page;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return view('admin.pages.index', [
            'pages' => Page::paginate()
        ]);
    }

    public function create()
    {
        return view('admin.pages.edit', [
            'page' => Page::make()
        ]);
    }

    public function store(Request $request)
    {
        Page::create($this->data($request));

        return redirect()->route('acp.pages.index');
    }

    public function edit(Page $page)
    {
        return view('admin.pages.edit', [
            'page' => $page
        ]);
    }

    public function update(Page $page, Request $request)
    {
        $page->update($this->data($request));

        return redirect()->route('acp.pages.index');
    }

    public function destroy(Page $page)
    {
        $page->delete();

        return redirect()->route('acp.pages.index');
    }

    protected function data(Request $request)
    {
        return $request->validate([
            'title'          => 'required',
            'content'        => 'required',
            'hide_from_blog' => 'boolean',
            'image'          => 'sometimes|nullable'
        ]);
    }
}
