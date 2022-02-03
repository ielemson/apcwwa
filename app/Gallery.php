<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use phpDocumentor\Reflection\Types\This;

class Gallery extends Model
{
    protected $fillable = ['title','category','image_path','caption'];

    public function image()
    
    {
      return $this->belongsTo('App\GalleryImage');
    }
}
