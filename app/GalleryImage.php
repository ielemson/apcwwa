<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GalleryImage extends Model
{
    protected $fillable =['image_path','gallery_id'];

    public function image(){
        return $this->belongsTo('App\Galery');
    }
}
