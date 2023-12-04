<?php

namespace Testimonial\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    use Sluggable;

    protected $fillable = [
        'name',
        'slug',
        'status',
        'image_id',
        'description',
        'address',
        'company_name',
        'company_logo',
    ];


    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name',
                'onUpdate' => true
            ]
        ];
    }
}
