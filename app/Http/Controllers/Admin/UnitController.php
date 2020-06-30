<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Unit;
use Illuminate\Http\Request;

class UnitController extends Controller
{
    public function index()
    {
        return view('admin.units.index', [
            'units' => Unit::paginate()
        ]);
    }

    public function create()
    {
        return view('admin.units.edit', [
            'unit' => Unit::make()
        ]);
    }

    public function store(Request $request)
    {
        Unit::create($this->data($request));

        return redirect()->route('acp.units.index');
    }

    public function edit(Unit $unit)
    {
        return view('admin.units.edit', [
            'unit' => $unit
        ]);
    }

    public function update(Unit $unit, Request $request)
    {
        $unit->update($this->data($request));

        return redirect()->route('acp.units.index');
    }

    public function destroy(Unit $unit)
    {
        $unit->delete();

        return redirect()->route('acp.units.index');
    }

    protected function data(Request $request)
    {
        return $request->validate([
            'name' => 'required',
            'abbr' => 'required'
        ]);
    }
}
