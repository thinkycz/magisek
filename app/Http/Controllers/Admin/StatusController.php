<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Status;
use Illuminate\Http\Request;

class StatusController extends Controller
{
    public function index()
    {
        return view('admin.statuses.index', [
            'statuses' => Status::paginate()
        ]);
    }

    public function create()
    {
        return view('admin.statuses.edit', [
            'status' => Status::make()
        ]);
    }

    public function store(Request $request)
    {
        Status::create($this->data($request));

        return redirect()->route('acp.statuses.index');
    }

    public function edit(Status $status)
    {
        return view('admin.statuses.edit', [
            'status' => $status
        ]);
    }

    public function update(Status $status, Request $request)
    {
        $status->update($this->data($request));

        return redirect()->route('acp.statuses.index');
    }

    public function destroy(Status $status)
    {
        $status->delete();

        return redirect()->route('acp.statuses.index');
    }

    protected function data(Request $request)
    {
        return $request->validate([
            'name'        => 'required',
            'description' => 'required',
            'color'       => 'required',
            'is_final'    => 'boolean'
        ]);
    }
}
