<?php

namespace Category\Models;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Files\Models\UploadFile;
use Product\Models\Product;
use App\Model\SeoContent;

class Category extends Model
{
    use Sluggable;

    protected $appends = ['logo_url', 'banner_url'];
    
    protected $fillable = [
        'title','slug',
        'parent_id','category_icon',
        'status','banner','logo',
        'featured','meta_title',
        'meta_description','description',
        'short_desc','sub_title',
        'category_position','banner_image'
    ];

    
    public function sluggable():array
    {
        return [
            'slug' => [
                'source' => 'title',
                'onUpdate'=>true
            ]
        ];
    }
    
    
    public function seoable()
    {
        return $this->morphOne(SeoContent::class, 'seoable');
    }

    public function scopeActive($query){
        return $query->where('status', 'active');
    }

    public function scopeFeatured($query){
        return $query->where('featured', 1);
    }

    public function scopeParentCatrgories($query){
        return $query->where('parent_id', 0)->orwhere('parent_id',null);
    }


    public function getLogoUrlAttribute()
    {
        return $this->returnFile($this->logo);
    }

    public function getBannerUrlAttribute()
    {

        return $this->returnFile($this->banner);
    }

    public function returnFile($fileId){
        if($fileId){
            $upload = UploadFile::where('id', $fileId)->first();
            if($upload){
                return thumbnail_url($upload);
            }
        }
        return null;
    }

    public function parent()
    {
        return $this->belongsTo(Category::class, 'parent_id');
    }

    public function children()
    {
        return $this->hasMany(Category::class, 'parent_id');
    }


    public function products()
    {
        return $this->hasMany(Product::class, 'category_id', 'id');
    }

   
}
