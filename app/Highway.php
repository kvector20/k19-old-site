<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Highway extends Model
{
    protected $fillable = [
    	'name',
        'email',
        'phone',
        'national_id',
        'facebook_link',
        'university',
        'faculty',
        'department',
        'academic_year',
        'session',
        'cv_file',
        'why',
    ];
}
