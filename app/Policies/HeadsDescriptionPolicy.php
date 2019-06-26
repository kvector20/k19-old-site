<?php

namespace App\Policies;

use App\User;
use App\HeadsDescription;
use Illuminate\Auth\Access\HandlesAuthorization;

class HeadsDescriptionPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the permission.
     *
     * @param  \App\User  $user
     * @param  \App\permission  $permission
     * @return mixed
     */
    public function view(User $user)
    {
        foreach ($user->position->permissions as $permission) {
            if ($permission->type === 'headsDescription.view') {
                return true;
            }
        }
        return false;
    }

    /**
     * Determine whether the user can create headsDescription.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        foreach ($user->position->permissions as $permission) {
            if ($permission->type === 'headsDescription.create') {
                return true;
            }
        }
        return false;
    }

    /**
     * Determine whether the user can update the permission.
     *
     * @param  \App\User  $user
     * @param  \App\permission  $permission
     * @return mixed
     */
    public function update(User $user)
    {
        foreach ($user->position->permissions as $permission) {
            if ($permission->type === 'headsDescription.update') {
                return true;
            }
        }
        return false;
    }

    /**
     * Determine whether the user can delete the permission.
     *
     * @param  \App\User  $user
     * @param  \App\permission  $permission
     * @return mixed
     */
    public function delete(User $user)
    {
        foreach ($user->position->permissions as $permission) {
            if ($permission->type === 'headsDescription.delete') {
                return true;
            }
        }
        return false;
    }

    /**
     * Determine whether the user can restore the heads description.
     *
     * @param  \App\User  $user
     * @param  \App\HeadsDescription  $headsDescription
     * @return mixed
     */
    public function restore(User $user)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the heads description.
     *
     * @param  \App\User  $user
     * @param  \App\HeadsDescription  $headsDescription
     * @return mixed
     */
    public function forceDelete(User $user)
    {
        //
    }
}
