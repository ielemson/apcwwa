<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StateCordinator extends Model
{
    protected $fillable = ['user_id','state_id','zone_id'];

    public function state_cordinator(){
        return $this->belongsTo(Zone::class);
    }

    public function state(){

        return $this->belongsTo(State::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
    public function zone(){
        return $this->belongsTo(Zone::class);
    }
}
