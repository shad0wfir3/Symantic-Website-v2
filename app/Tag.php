<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{

    /**
     * @var  string
     */
    protected $table = 'tags';

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    public function posts(){

        return $this->belongsTo(Post::class);
    }

}
