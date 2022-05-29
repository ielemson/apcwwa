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
        return $this->hasMany(Ward::class);
    }

    public function state_events()
    {
        return $this->hasMany('App\StateActivity');
    }


    public function state_cordinator(){
        return $this->belongsTo(StateCordinator::class,'state_id');
    }

    public function posts(){
        return $this->hasMany(Post::class,'state_id');
    }
}
