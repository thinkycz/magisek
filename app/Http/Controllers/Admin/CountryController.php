<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Country;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    public function index()
    {
        return view('admin.countries.index', [
            'countries' => Country::paginate()
        ]);
    }

    public function create()
    {
        return view('admin.countries.edit', [
            'country' => Country::make()
        ]);
    }

    public function store(Request $request)
    {
        Country::create($this->data($request));

        return redirect()->route('acp.countries.index');
    }

    public function edit(Country $country)
    {
        return view('admin.countries.edit', [
            'country' => $country
        ]);
    }

    public function update(Country $country, Request $request)
    {
        $country->update($this->data($request));

        return redirect()->route('acp.countries.index');
    }

    public function destroy(Country $country)
    {
        $country->delete();

        return redirect()->route('acp.countries.index');
    }

    protected function data(Request $request)
    {
        return $request->validate([
            'name'     => 'required',
            'isocode2' => 'required',
            'isocode3' => 'required',
            'enabled'  => 'boolean'
        ]);
    }
}
