<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Service extends Model
{
    use SoftDeletes;

    protected $casts = [
      'breakdown_services' => 'array'
    ];

    protected $fillable = [
        'name',
        'icon',
        'short_description',
        'content',
        'featured_img',
        'page_img',
        'request_type',
        'breakdown_services'
    ];

    public function scopePublished($query)
    {
        return $query->where('status','published');
    }

    public function scopeDraft($query)
    {
        return !$this->scopePublished($query);
    }
}
