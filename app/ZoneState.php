<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ZoneState extends Model
{
    protected $fillable = ['state_id','zone_id','user_id'];

    public function zone_state(){
        return $this->belongsTo(Zone::class);
      }

      public function state(){
          return $this->belongsTo(State::class,'state_id');
      }

      public function user(){
          return $this->belongsTo(User::class,'user_id');
      }
}
