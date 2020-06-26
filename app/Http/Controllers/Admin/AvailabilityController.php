<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Availability;
use Illuminate\Http\Request;

class AvailabilityController extends Controller
{
    public function index()
    {
        return view('admin.availabilities.index', [
            'availabilities' => Availability::paginate()
        ]);
    }

    public function create()
    {
        return view('admin.availabilities.edit', [
            'availability' => Availability::make()
        ]);
    }

    public function store(Request $request)
    {
        Availability::create($this->data($request));

        return redirect()->route('acp.availabilities.index');
    }

    public function edit(Availability $availability)
    {
        return view('admin.availabilities.edit', [
            'availability' => $availability
        ]);
    }

    public function update(Availability $availability, Request $request)
    {
        $availability->update($this->data($request));

        return redirect()->route('acp.availabilities.index');
    }

    public function destroy(Availability $availability)
    {
        $availability->delete();

        return redirect()->route('acp.availabilities.index');
    }

    protected function data(Request $request)
    {
        return $request->validate([
            'name'                    => 'required',
            'description'             => 'required',
            'allow_orders'            => 'boolean',
            'allow_negative_quantity' => 'boolean',
            'products_visible'        => 'boolean',
        ]);
    }
}
