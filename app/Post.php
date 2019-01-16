<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title', 'description',
    ];
    protected $table = 'post';
    public $timestamps = false;

    public function comments()
    {
        return $this->hasMany('App\Comment', 'postId','id');
    }

    public function author()
    {
        return $this->hasOne('App\User','id','authorId');
    }
}
