<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LGA extends Model
{
    protected $fillable = ['name','state_id'];
    protected $table = "lgas";


    public function state()
    {
        return $this->belongsTo('App\State');
    }

    public function ward()
    {
        return $this->belongsTo('App\Ward');
    }

    public function stateActivity(){
        return $this->belongsTo('App\StateActivity','lga_id');
    }

    public function wards()
    {
        return $this->hasMany('App\Ward','lga_id');
    }

   
}
