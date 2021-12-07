<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Desk extends Model
{
    protected $fillable = [
     "name","post","user_photo","speech"
    ];
}
