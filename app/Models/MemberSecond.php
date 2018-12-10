<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MemberSecond extends Model
{
    protected $fillable = [
    	'name',
        'email',
        'phone',
        'facebook_link',
        'university',
        'faculty',
        'department',
        'academic_year',
        'first',
        'second',
    ];
}
