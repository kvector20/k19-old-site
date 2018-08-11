<?php

namespace App\Policies;

use App\Models\role;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class RolesPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the role.
     *
     * @param  \App\User  $user
     * @param  \App\role  $role
     * @return mixed
     */
    public function view(User $user)
    {
        foreach ($user->position->permissions as $permission) {
            if ($permission->type === 'roles.view') {
                return true;
            }
        }
        return false;
    }

    /**
     * Determine whether the user can create roles.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        foreach ($user->position->permissions as $permission) {
            if ($permission->type === 'roles.create') {
                return true;
            }
        }
        return false;
    }

    /**
     * Determine whether the user can update the role.
     *
     * @param  \App\User  $user
     * @param  \App\role  $role
     * @return mixed
     */
    public function update(User $user)
    {
        foreach ($user->position->permissions as $permission) {
            if ($permission->type === 'roles.update') {
                return true;
            }
        }
        return false;
    }

    /**
     * Determine whether the user can delete the role.
     *
     * @param  \App\User  $user
     * @param  \App\role  $role
     * @return mixed
     */
    public function delete(User $user)
    {
        foreach ($user->position->permissions as $permission) {
            if ($permission->type === 'roles.delete') {
                return true;
            }
        }
        return false;
    }
}
