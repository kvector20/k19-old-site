<?php

namespace App\Models;

use App\Models\mtopic;
use Illuminate\Database\Eloquent\Model;

class mheadline extends Model
{
    public function topics()
    {
    	return $this->hasMany(mtopic::class, 'headline_id', 'id')->where('publish', '<>', 'null');
    }
}
