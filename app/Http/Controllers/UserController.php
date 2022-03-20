<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\Models\Permission;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    public function index()
    {
        $users = User::all()->except(auth()->id());
        return view('pages.users.index', ['users' => $users]);
    }

    public function create()
    {
        return view('pages.users.create');
    }

    public function store(StoreUserRequest $request)
    {
        $request->merge(['password' => Hash::make($request->password)]);
        $user = User::create($request->input());
        foreach ($request->modules as $module) {
            $permission = Permission::firstOrCreate(['module' => $module]);
            $user->permissions()->attach($permission->id, ['access' => $request->access]);
        }
        return redirect()->route('users.index');
    }

    public function show(User $user)
    {
        $permissions = $user->permissions;
        $access = $permissions[0]->pivot->access;
        foreach ($permissions as $permission) {
            $modules[] = $permission->module;
        }
        return view('pages.users.show', ['user' => $user, 'modules' => $modules, 'access' => $access]);
    }

    public function edit(User $user)
    {
        return $user;
    }

    public function update(Request $request, User $user)
    {
        //
    }

    public function destroy(User $user)
    {
        //
    }
}
