<?php

namespace App\Models;

use App\Models\permission;
use Illuminate\Database\Eloquent\Model;

class role extends Model
{
    public function permissions()
    {
    	return $this->belongsToMany(permission::class, 'role_permissions');
    }
}
