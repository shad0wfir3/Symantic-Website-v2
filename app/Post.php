<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $dates = [
        'published_date'
    ];

    protected $casts = [
        'tags' => 'array'
    ];

    protected $fillable = [
        'author_id',
        'title',
        'excerpt',
        'content',
        'tags',
        'featured_img',
        'published_date',
        'status'
    ];

    public function authors(){
        return $this->belongsTo(User::class,'author_id');
    }

}
