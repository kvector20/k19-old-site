<?php

namespace App\Policies;

use App\Models\Event;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class EventsPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the event.
     *
     * @param  \App\User  $user
     * @param  \App\Event  $event
     * @return mixed
     */
    public function view(User $user)
    {
        foreach ($user->position->permissions as $permission) {
            if ($permission->type === 'events.view') {
                return true;
            }
        }
        return false;
    }

    /**
     * Determine whether the user can create events.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        foreach ($user->position->permissions as $permission) {
            if ($permission->type === 'events.create') {
                return true;
            }
        }
        return false;
    }

    /**
     * Determine whether the user can update the event.
     *
     * @param  \App\User  $user
     * @param  \App\Event  $event
     * @return mixed
     */
    public function update(User $user)
    {
        foreach ($user->position->permissions as $permission) {
            if ($permission->type === 'events.update') {
                return true;
            }
        }
        return false;
    }

    /**
     * Determine whether the user can delete the event.
     *
     * @param  \App\User  $user
     * @param  \App\Event  $event
     * @return mixed
     */
    public function delete(User $user)
    {
        foreach ($user->position->permissions as $permission) {
            if ($permission->type === 'events.delete') {
                return true;
            }
        }
        return false;
    }

    /**
     * Determine whether the user can restore the event.
     *
     * @param  \App\User  $user
     * @param  \App\Event  $event
     * @return mixed
     */
    public function restore(User $user, Event $event)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the event.
     *
     * @param  \App\User  $user
     * @param  \App\Event  $event
     * @return mixed
     */
    public function forceDelete(User $user, Event $event)
    {
        //
    }
}
