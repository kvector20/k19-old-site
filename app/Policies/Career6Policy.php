<?php

namespace App\Policies;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class Career6Policy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function session(User $user)
    {
        foreach ($user->position->permissions as $permission) {
            if ($permission->type === 'career6.session') {
                return true;
            }
        }
        return false;
    }

    public function view(User $user)
    {
        foreach ($user->position->permissions as $permission) {
            if ($permission->type === 'career6.view') {
                return true;
            }
        }
        return false;
    }
}
