<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ReportPolicy
{
    use HandlesAuthorization;

    public function read(User $user)
    {
        $permissions = $user->permissions;
        foreach ($permissions as $permission) {
            $module = $permission->module;
            $access = $permission->pivot->access;
            if ($module == 'reports' && ($access == 'read' || $access == 'write'))
                return true;
        }
        return false;
    }
}
