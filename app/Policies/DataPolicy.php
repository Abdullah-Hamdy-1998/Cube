<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class DataPolicy
{
    use HandlesAuthorization;

    public function read(User $user)
    {
        $permissions = $user->permissions;
        foreach ($permissions as $permission) {
            $module = $permission->module;
            $access = $permission->pivot->access;
            if ($module == 'data' && ($access == 'read' || $access == 'write'))
                return true;
        }
        return false;
    }

    public function write(User $user)
    {
        $permissions = $user->permissions;
        foreach ($permissions as $permission) {
            if ($permission->module == 'data' && $permission->pivot->access == 'write')
                return true;
        }
        return false;
    }
}
