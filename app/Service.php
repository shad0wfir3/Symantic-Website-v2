<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{

    /**
     * @var  string
     */
    protected $table = 'services';

    protected $casts = [
        'published_date' => 'datetime',
        'deleted_at' => 'datetime',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
        'sub_services' => 'array',
        'cta_skills' => 'array'
    ];

}
