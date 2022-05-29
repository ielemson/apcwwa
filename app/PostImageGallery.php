<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PostImageGallery extends Model
{
    protected $fillable = ['file_path','post_id'];

    public function post()
    {
        // an Image belongs to a Product, using the foreign key 'product_id'
        return $this->belongsTo(Post::class);
    }
}
