<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    public function index()
    {
        return view('admin.banners.index', [
            'banners' => Banner::paginate()
        ]);
    }

    public function create()
    {
        return view('admin.banners.edit', [
            'banner' => Banner::make()
        ]);
    }

    public function store(Request $request)
    {
        Banner::create($this->data($request));

        return redirect()->route('acp.banners.index');
    }

    public function edit(Banner $banner)
    {
        return view('admin.banners.edit', [
            'banner' => $banner
        ]);
    }

    public function update(Banner $banner, Request $request)
    {
        $banner->update($this->data($request));

        return redirect()->route('acp.banners.index');
    }

    public function destroy(Banner $banner)
    {
        $banner->delete();

        return redirect()->route('acp.banners.index');
    }

    protected function data(Request $request)
    {
        return $request->validate([
            'name'    => 'required',
            'enabled' => 'boolean',
        ]);
    }
}
