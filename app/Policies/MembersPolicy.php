<?php

namespace App\Policies;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class MembersPolicy
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
            if ($permission->type === 'memberssecond.view') {
                return true;
            }
        }
        return false;
    }
}
