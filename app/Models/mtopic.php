<?php

namespace App\Models;

use App\User;
use App\Models\mComment;
use App\Models\mheadline;
use Illuminate\Database\Eloquent\Model;

class mtopic extends Model
{
    public function headline()
    {
    	return $this->hasOne(mheadline::class, 'id', 'headline_id');
    }

    public function writer()
    {
    	return $this->hasOne(User::class, 'id', 'user_id');
    }

    public function comments()
    {
    	return $this->hasMany(mComment::class, 'topic_id');
    }
}
