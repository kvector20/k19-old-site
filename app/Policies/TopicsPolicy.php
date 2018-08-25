<?php

namespace App\Policies;

use App\User;
use App\mtopic;
use Illuminate\Auth\Access\HandlesAuthorization;

class TopicsPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the mtopic.
     *
     * @param  \App\User  $user
     * @param  \App\mtopic  $mtopic
     * @return mixed
     */
    public function view(User $user)
    {
        foreach ($user->position->permissions as $permission) {
            if ($permission->type === 'topics.view') {
                return true;
            }
        }
        return false;
    }

    /**
     * Determine whether the user can create mtopics.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        foreach ($user->position->permissions as $permission) {
            if ($permission->type === 'topics.create') {
                return true;
            }
        }
        return false;
    }

    /**
     * Determine whether the user can update the mtopic.
     *
     * @param  \App\User  $user
     * @param  \App\mtopic  $mtopic
     * @return mixed
     */
    public function update(User $user)
    {
        foreach ($user->position->permissions as $permission) {
            if ($permission->type === 'topics.update') {
                return true;
            }
        }
        return false;
    }

    /**
     * Determine whether the user can delete the mtopic.
     *
     * @param  \App\User  $user
     * @param  \App\mtopic  $mtopic
     * @return mixed
     */
    public function delete(User $user)
    {
        foreach ($user->position->permissions as $permission) {
            if ($permission->type === 'topics.delete') {
                return true;
            }
        }
        return false;
    }

    public function publish(User $user)
    {
        foreach ($user->position->permissions as $permission) {
            if ($permission->type === 'topics.publish') {
                return true;
            }
        }
        return false;
    }
}
