<?php

namespace Product\Models;

use App\Model\SeoContent;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class FinishedProduct extends Model
{
    use Sluggable;

    protected $fillable = [
        'title','description','image_id','video_link'        
    ];

    public function sluggable():array{
        return [
            'slug' => [
                'source' => 'title',
                'onUpdate'=>true
            ]
        ];
    }
    
    public function products(){
        return $this->belongsToMany(Product::class,'product_recpies');
    }

    public function seoable()
    {
        return $this->morphOne(SeoContent::class, 'seoable');
    }

  

}
