<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class StaticBlog extends Model
{
    protected $fillable = [
        'title', 'slug','image','status','description',

    ];

  
    public function scopeActive($query){
        return $query->where('status','Active');
    }

    public function seoable()
    {
        return $this->morphOne(SeoContent::class, 'seoable');
    }


}
