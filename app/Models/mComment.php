<?php

namespace App\Models;

use App\Models\mtopic;
use Illuminate\Database\Eloquent\Model;

class mComment extends Model
{
    public function topic()
    {
        return $this->belongsTo(mtopic::class);
    }
}
