<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Currency;
use Illuminate\Http\Request;

class CurrencyController extends Controller
{
    public function index()
    {
        return view('admin.currencies.index', [
            'currencies' => Currency::paginate()
        ]);
    }

    public function create()
    {
        return view('admin.currencies.edit', [
            'currency' => Currency::make()
        ]);
    }

    public function store(Request $request)
    {
        Currency::create($this->data($request));

        return redirect()->route('acp.currencies.index');
    }

    public function edit(Currency $currency)
    {
        return view('admin.currencies.edit', [
            'currency' => $currency
        ]);
    }

    public function update(Currency $currency, Request $request)
    {
        $currency->update($this->data($request));

        return redirect()->route('acp.currencies.index');
    }

    public function destroy(Currency $currency)
    {
        $currency->delete();

        return redirect()->route('acp.currencies.index');
    }

    protected function data(Request $request)
    {
        return $request->validate([
            'name'             => 'required',
            'isocode'          => 'required',
            'symbol'           => 'sometimes|nullable',
            'exchange_rate'    => 'required|numeric',
            'symbol_is_before' => 'boolean',
            'enabled'          => 'boolean',
        ]);
    }
}
