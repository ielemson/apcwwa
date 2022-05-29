<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class Post extends Model
{
    use LogsActivity;
    protected $fillable = [
        'post_title',
        'post_slug',
        'post_body',
        'featured_image',
        'status',
        'category_id',
        'user_id',
        'event_status',
        'img_gallery'
    ];
    protected static $logFillable = true;
    protected static $logName = 'post';
    protected static $logOnlyDirty = true;
    public function setStatusAttribute($status)
    {
        $this->attributes['status'] = ($status)? 1 : 0;
    }
    public function category()
    {
        return $this->belongsTo('App\Category');
    }
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function postimages()
    {
        // a post has one or many images (Image), using the foreign key 'product_id'
        return $this->hasMany(PostImageGallery::class, 'post_id');
    }

    public function postType(){
        return $this->hasMany(PostType::class);
    }

    public function state(){
        return $this->belongsTo(State::class);
    }
}
