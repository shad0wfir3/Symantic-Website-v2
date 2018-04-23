<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $dates = [
        'published_date'
    ];

    protected $casts = [
        'tags' => 'array',
        'featured' => 'boolean'
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

    public function author(){
        return $this->belongsTo(User::class,'author_id');
    }

    public function scopeFeatured(){
        return $this->where('featured',1)->where('status','published');
    }

    public function scopePublished(){
        return $this->where('status','published');
    }

    public function tags(){
        return $this->belongsToMany(Tag::class,'posts_tags');
    }

    public function categories(){
        return $this->belongsToMany(Category::class,'categories_posts');
    }

}
