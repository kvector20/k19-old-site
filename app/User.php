<?php

namespace App;

use App\Models\Education;
use App\Models\Experience;
use App\Models\PersonalInfo;
use App\Models\permission;
use App\Models\role;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    // protected $table = 'admins';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'role',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function position()
    {
        return $this->hasOne('App\Models\role', 'id', 'role');
    }

    public function experience()
    {
        return $this->hasOne(Experience::class);
    }

    public function education()
    {
        return $this->hasOne(Education::class);
    }

    public function personalInfo()
    {
        return $this->hasOne(PersonalInfo::class);
    }
}
