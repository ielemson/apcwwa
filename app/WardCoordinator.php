<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WardCoordinator extends Model
{

    protected $fillable = ['cordname','state_id','ward_id','lga_id'];

    public function cordinator(){
        return $this->belongsTo('App\Ward');
    }


}
