<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

    /**
     * @var  string
     */
    protected $table = 'posts';

    protected $casts = [
        'published_date' => 'datetime',
        'deleted_at' => 'datetime',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
        'featured' => 'boolean'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'author_id', 'id');
    }

    public function scopeFeatured(){

        return $this->where('featured',true);
    }

    public function tags(){
        return $this->belongsToMany(Tag::class,'posts_tags');
    }

    public function categories(){
        return $this->belongsToMany(Category::class,'categories_posts');
    }
}
