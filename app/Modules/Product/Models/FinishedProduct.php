<?php

namespace Product\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class FinishedProduct extends Model
{
    use Sluggable;

    protected $fillable = [
        'title','description','image_id','product_id'        
    ];

    public function sluggable():array{
        return [
            'slug' => [
                'source' => 'title',
                'onUpdate'=>true
            ]
        ];
    }
    
    public function mainProduct(){
        return $this->belongsTo(Product::class,'product_id');
    }
}
