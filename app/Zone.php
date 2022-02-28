<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Zone extends Model
{
    protected $fillable = ['user_id','zone'];

    public function user(){

       return  $this->belongsTo('App\User','user_id');
    }

  public function state_cordinators(){
      return $this->hasMany(StateCordinator::class);
  }

  public function zone_states(){
    return $this->hasMany(ZoneState::class);
  }
  
}
