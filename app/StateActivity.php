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

    public function postimages()
    {
        // a post has one or many images (Image), using the foreign key 'product_id'
        return $this->hasMany(StatePostImageGallery::class, 'post_id');
    }
}