<?php

namespace App\Policies;

use App\User;
use App\mheadline;
use Illuminate\Auth\Access\HandlesAuthorization;

class HeadlinesPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the mheadline.
     *
     * @param  \App\User  $user
     * @param  \App\mheadline  $mheadline
     * @return mixed
     */
    public function view(User $user)
    {
        foreach ($user->position->permissions as $permission) {
            if ($permission->type === 'headlines.view') {
                return true;
            }
        }
        return false;
    }

    /**
     * Determine whether the user can create mheadlines.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        foreach ($user->position->permissions as $permission) {
            if ($permission->type === 'headlines.create') {
                return true;
            }
        }
        return false;
    }

    /**
     * Determine whether the user can update the mheadline.
     *
     * @param  \App\User  $user
     * @param  \App\mheadline  $mheadline
     * @return mixed
     */
    public function update(User $user)
    {
        foreach ($user->position->permissions as $permission) {
            if ($permission->type === 'headlines.update') {
                return true;
            }
        }
        return false;
    }

    /**
     * Determine whether the user can delete the mheadline.
     *
     * @param  \App\User  $user
     * @param  \App\mheadline  $mheadline
     * @return mixed
     */
    public function delete(User $user)
    {
        foreach ($user->position->permissions as $permission) {
            if ($permission->type === 'headlines.delete') {
                return true;
            }
        }
        return false;
    }
}
