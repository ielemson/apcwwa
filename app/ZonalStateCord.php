<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ZonalStateCord extends Model
{
    protected $fillable = ['user_id','portfolio'];
    protected $table = "zonal_and_state_cords";

    public function user(){
        return $this->belongsTo(User::class);
    }
}
