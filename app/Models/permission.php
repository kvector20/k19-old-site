<?php

namespace App\Models;

use App\Models\role;
use Illuminate\Database\Eloquent\Model;

class permission extends Model
{
    public function role()
    {
    	return $this->belongsToMany(role::class, 'role_permission');
    }
}
