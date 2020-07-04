<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PriceLevel;
use Illuminate\Http\Request;

class PriceLevelController extends Controller
{
    public function index()
    {
        return view('admin.price-levels.index', [
            'priceLevels' => PriceLevel::paginate()
        ]);
    }

    public function create()
    {
        return view('admin.price-levels.edit', [
            'priceLevel' => PriceLevel::make()
        ]);
    }

    public function store(Request $request)
    {
        PriceLevel::create($this->data($request));

        return redirect()->route('acp.price-levels.index');
    }

    public function edit(PriceLevel $priceLevel)
    {
        return view('admin.price-levels.edit', [
            'priceLevel' => $priceLevel
        ]);
    }

    public function update(PriceLevel $priceLevel, Request $request)
    {
        $priceLevel->update($this->data($request));

        return redirect()->route('acp.price-levels.index');
    }

    public function destroy(PriceLevel $priceLevel)
    {
        $priceLevel->delete();

        return redirect()->route('acp.price-levels.index');
    }

    protected function data(Request $request)
    {
        return $request->validate([
            'name'                   => 'required',
            'has_quantity_discounts' => 'boolean',
            'enabled'                => 'boolean'
        ]);
    }
}
