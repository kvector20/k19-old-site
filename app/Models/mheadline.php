<?php

namespace App\Models;

use App\User;
use App\Models\mtopic;
use Illuminate\Database\Eloquent\Model;

class mheadline extends Model
{
    public function topics()
    {
        return $this->hasMany(mtopic::class, 'headline_id', 'id')->latest()->where('publish', '<>', 'null');
    }
}
