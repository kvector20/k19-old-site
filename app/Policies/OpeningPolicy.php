<?php

namespace App\Policies;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class OpeningPolicy
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
            if ($permission->type === 'Opening19.view') {
                return true;
            }
        }
        return false;
    }

    public function mail(User $user)
    {
        foreach ($user->position->permissions as $permission) {
            if ($permission->type === 'Opening19.mail') {
                return true;
            }
        }
        return false;
    }
}
