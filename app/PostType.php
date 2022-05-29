<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PostType extends Model
{
    protected $guarded = [];

    public function post(){
        return $this->belongsTo(Post::class,'post_id');
    }
    public function typename(){
        return $this->belongsTo(Types::class,'type_id');
    }
}
