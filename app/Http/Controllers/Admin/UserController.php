<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('admin.users.index', [
            'users' => User::paginate()
        ]);
    }

    public function create()
    {
        return view('admin.users.edit', [
            'user' => User::make()
        ]);
    }

    public function store(Request $request)
    {
        User::create($this->data($request));

        return redirect()->route('acp.users.index');
    }

    public function edit(User $user)
    {
        return view('admin.users.edit', [
            'user' => $user
        ]);
    }

    public function update(User $user, Request $request)
    {
        $user->update($this->data($request));

        return redirect()->route('acp.users.index');
    }

    public function destroy(User $user)
    {
        $user->delete();

        return redirect()->route('acp.users.index');
    }

    protected function data(Request $request)
    {
        return $request->validate([

        ]);
    }
}
