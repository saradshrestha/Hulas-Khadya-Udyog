<?php

namespace Product\Models;

use Category\Models\Category;
use Cviebrock\EloquentSluggable\Sluggable;
use Files\Models\UploadFile;
use Illuminate\Database\Eloquent\Model;
use App\Model\SeoContent;

class Product extends Model
{
    use Sluggable;

    protected $fillable = [
            'title','sku','sub_title',
            'slug','status',
            'feature_image', 'user_id',
            'category_id', 'highlights',
            'specification','product_position',
            'user_id','purchase_link','is_featured'
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($product) {
            if($product->discount_type == 1){
                $discoundPrice = ($product->product_price * $product->discount_price) / 100;
                $product->discount_price = round($discoundPrice);
            }
        });
    }

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
        return $query->where('status','active');
    }

    public function scopeFeaturedProduct($query){
        return $query->where('is_featured','Yes');
    }

    public function scopeOrderByPosition($query){
        return $query->orderBy('product_position','ASC');
    }

    public function getFeatureUrlAttribute() {
        $featureimage['thumbnail_image'] = $this->returnFile($this->feature_image);
        $featureimage['original_image'] = $this->returnOriginalFile($this->feature_image);

        return $featureimage;
    }

    // public function getCategoryTitleAttribute() {
    //     $category = Category::where('id',$this->category_id)->first();
    //     return  $category->title;
    // }


    public function getProductImagesAttribute()
    {
        $images = $this->images()->with('upload')->get();
        $returnimages = [];
        if ($images) {
            foreach ($images as $key => $image) {
                $returnimages[$key]['id'] = $image->image_id;
                $returnimages[$key]['resize_path'] = $this->returnFile($image->image_id);
                $returnimages[$key]['original_path'] = $this->returnOriginalFile($image->image_id);            }
        }
        return $returnimages;
    }

    public function getDiscountPercentAttribute(){
        $discountpercent =  ($this->discount_price * 100) /  1;
        return round($discountpercent, 2);
    }

    public function images()
    {
        return $this->hasMany(ProductImage::class, 'product_id', 'id');
    }

    public function returnFile($fileId)
    {
        if ($fileId) {
            $upload = UploadFile::where('id', $fileId)->first();
            if ($upload) {
                return thumbnail_url($upload);
            }
        }
        return null;
    }

    public function returnOriginalFile($fileId)
    {
        if ($fileId) {
            $upload = UploadFile::where('id', $fileId)->first();
            if ($upload) {
                return original_url($upload);
            }
        }
        return null;
    }



    public function productimages(){
        return $this->hasMany(ProductImage::class, 'product_id', 'id');
    }



    public function productMeta(){
        return $this->hasMany(ProductMeta::class,'product_id');
    }

    public function finishedProducts(){
        return $this->hasMany(FinishedProduct::class);
    }

    public function category(){
        return $this->belongsTo(Category::class,'category_id');
    }



}
