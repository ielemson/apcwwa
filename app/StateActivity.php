<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StateActivity extends Model
{
    protected $fillable = ['event_title','event_slug','event_body','featured_image','state_id','lga_id','ward_id','status'];

    public function state()
    {
        return $this->belongsTo('App\State');
    }

    public function lga()
    {
        return $this->belongsTo('App\LGA');
    }
}