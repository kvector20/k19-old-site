<?php

namespace App\Policies;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class Highway19Policy
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

    public function view(User $user)
    {
        foreach ($user->position->permissions as $permission) {
            if ($permission->type === 'highway.view') {
                return true;
            }
        }
        return false;
    }
}
