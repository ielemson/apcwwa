<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Types extends Model
{
    protected $fillable =['type'];

    public function type(){
        return $this->hasMany(Types::class);
    }
}
