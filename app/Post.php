<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'user_id',
        'title',
        'body',
        'slug',
        'updated_at',
        'path_image',
        'published'
    ];

    public function user() {
        return $this->belongsTo('App\User'); 
    }

    public function comment ()
    {
        return $this->hasOne('App\Comment');
    }
    
    public function tags ()
    {
        return $this->belongsToMany('App\Tag');
    }

}
