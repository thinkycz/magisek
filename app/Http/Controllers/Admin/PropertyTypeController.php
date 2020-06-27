<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PropertyType;
use Illuminate\Http\Request;

class PropertyTypeController extends Controller
{
    public function index()
    {
        return view('admin.property-types.index', [
            'propertyTypes' => PropertyType::paginate()
        ]);
    }

    public function create()
    {
        return view('admin.property-types.edit', [
            'propertyType' => PropertyType::make()
        ]);
    }

    public function store(Request $request)
    {
        PropertyType::create($this->data($request));

        return redirect()->route('acp.property-types.index');
    }

    public function edit(PropertyType $propertyType)
    {
        return view('admin.property-types.edit', [
            'propertyType' => $propertyType
        ]);
    }

    public function update(PropertyType $propertyType, Request $request)
    {
        $propertyType->update($this->data($request));

        return redirect()->route('acp.property-types.index');
    }

    public function destroy(PropertyType $propertyType)
    {
        $propertyType->delete();

        return redirect()->route('acp.property-types.index');
    }

    protected function data(Request $request)
    {
        return $request->validate([
            'name'        => 'required',
            'is_hidden'   => 'boolean',
            'is_sortable' => 'boolean'
        ]);
    }
}
