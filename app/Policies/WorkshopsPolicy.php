<?php

namespace App\Policies;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class WorkshopsPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the workshop.
     *
     * @param  \App\User  $user
     * @param  \App\Workshop  $workshop
     * @return mixed
     */
    public function view(User $user)
    {
        foreach ($user->position->permissions as $permission) {
            if ($permission->type === 'workshops.view') {
                return true;
            }
        }
        return false;
    }

    /**
     * Determine whether the user can create workshops.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        foreach ($user->position->permissions as $permission) {
            if ($permission->type === 'workshops.create') {
                return true;
            }
        }
        return false;
    }

    /**
     * Determine whether the user can update the workshop.
     *
     * @param  \App\User  $user
     * @param  \App\Workshop  $workshop
     * @return mixed
     */
    public function update(User $user)
    {
        foreach ($user->position->permissions as $permission) {
            if ($permission->type === 'workshops.update') {
                return true;
            }
        }
        return false;
    }

    /**
     * Determine whether the user can delete the workshop.
     *
     * @param  \App\User  $user
     * @param  \App\Workshop  $workshop
     * @return mixed
     */
    public function delete(User $user)
    {
        foreach ($user->position->permissions as $permission) {
            if ($permission->type === 'workshops.delete') {
                return true;
            }
        }
        return false;
    }

    /**
     * Determine whether the user can restore the workshop.
     *
     * @param  \App\User  $user
     * @param  \App\Workshop  $workshop
     * @return mixed
     */
    public function restore(User $user)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the workshop.
     *
     * @param  \App\User  $user
     * @param  \App\Workshop  $workshop
     * @return mixed
     */
    public function forceDelete(User $user)
    {
        //
    }
}
