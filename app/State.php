<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    protected $fillable =['name'];

    public function lgas()
    {
        return $this->hasMany('App\LGA');
    }

    public function lga()
    {
        return $this->hasOne('App\LGA','lga_id');
    }

    public function wards()
    {
        return $this->hasMany('App\Ward');
    }

    public function state_events()
    {
        return $this->hasMany('App\StateActivity');
    }
}
