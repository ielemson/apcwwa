<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ward extends Model
{
    
    protected $fillable = ['name','state_id','lga_id'];

    public function cordinator()
    {
        return $this->hasOne('App\WardCoordinator');
    }
    
    public function state()
    {
        return $this->belongsTo('App\State','state_id');
    }

    public function lga()
    {
        return $this->belongsTo('App\LGA','lga_id');
    }
}
