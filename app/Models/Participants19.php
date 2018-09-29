<?php

namespace App\Models;

use App\Models\Workshop;
use Illuminate\Database\Eloquent\Model;

class Participants19 extends Model
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
        'why_first',
    ];

    public function firstPreference()
    {
        return $this->belongsTo(Workshop::class, 'first');
    }
}
