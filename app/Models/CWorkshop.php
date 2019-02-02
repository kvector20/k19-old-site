<?php

namespace App\Models;

use App\Models\Career6;
use Illuminate\Database\Eloquent\Model;

class CWorkshop extends Model
{
    public function participants()
    {
    	return $this->hasMany(Career6::class, 'session');
    }
}
