<?php

namespace App\Policies;

use App\User;
use App\Workshop;
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
    public function view(User $user, Workshop $workshop)
    {
        foreach ($user->position->permissions as $permission) {
            if ($permission->type === 'admins.view') {
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
        //
    }

    /**
     * Determine whether the user can update the workshop.
     *
     * @param  \App\User  $user
     * @param  \App\Workshop  $workshop
     * @return mixed
     */
    public function update(User $user, Workshop $workshop)
    {
        //
    }

    /**
     * Determine whether the user can delete the workshop.
     *
     * @param  \App\User  $user
     * @param  \App\Workshop  $workshop
     * @return mixed
     */
    public function delete(User $user, Workshop $workshop)
    {
        //
    }

    /**
     * Determine whether the user can restore the workshop.
     *
     * @param  \App\User  $user
     * @param  \App\Workshop  $workshop
     * @return mixed
     */
    public function restore(User $user, Workshop $workshop)
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
    public function forceDelete(User $user, Workshop $workshop)
    {
        //
    }
}
