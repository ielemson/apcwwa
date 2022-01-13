<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    protected $fillable = ['title1','title2','image','position','state_id','status'];

    public function state(){

        return $this->belongsTo('App\State','state_id');
    }
}
