<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dnc extends Model
{

    protected $fillable = ['user_id','dnc_order','post'];
    public function user(){

        return $this->belongsTo('App\User');
    }
}
