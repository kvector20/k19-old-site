<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HeadsDescription extends Model
{
    protected $fillable = [
        'name', 'description', 'image'
    ];
}
