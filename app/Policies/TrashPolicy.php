<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class TrashPolicy
{
    use HandlesAuthorization;

    public function read(User $user)
    {
        $permissions = $user->permissions;
        foreach ($permissions as $permission) {
            $module = $permission->module;
            $access = $permission->pivot->access;
            if ($module == 'trash' && ($access == 'read' || $access == 'write'))
                return true;
        }
        return false;
    }

    public function write(User $user)
    {
        $permissions = $user->permissions;
        foreach ($permissions as $permission) {
            if ($permission->module == 'trash' && $permission->pivot->access == 'write')
                return true;
        }
        return false;
    }
}
