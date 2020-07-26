<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

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
        $data = collect($this->data($request))
            ->reject(fn($item, $key) => ($key === 'password' && !$item));

        User::create($data->toArray());

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
        $data = collect($this->data($request))
            ->reject(fn($item, $key) => ($key === 'password' && !$item))
            ->reject(fn($item, $key) => (currentUser()->is($user) && $key === 'is_admin'));

        $user->update($data->toArray());

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
            'first_name' => ['required'],
            'last_name'  => ['required'],
            'email'      => ['required', 'email', Rule::unique('users', 'email')->ignore($request->route('user'))],
            'password'   => ['nullable'],
            'is_admin'   => ['boolean']
        ]);
    }
}
