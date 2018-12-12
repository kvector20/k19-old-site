<?php

namespace App\Models;

use App\Models\MemberSecond;
use App\Models\Participants19;
use Illuminate\Database\Eloquent\Model;

class Workshop extends Model
{
    public function participantsFirst()
    {
    	return $this->hasMany(Participants19::class, 'first');
    }

    public function participantsSecond()
    {
    	return $this->hasMany(Participants19::class, 'second');
    }

    public function membersFirst()
    {
    	return $this->hasMany(MemberSecond::class, 'first');
    }

    public function membersSecond()
    {
    	return $this->hasMany(MemberSecond::class, 'second');
    }
}
