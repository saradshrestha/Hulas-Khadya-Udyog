<?php

namespace Product\Models;

use Files\Models\UploadFile;
use Illuminate\Database\Eloquent\Model;

class ProductImage extends Model
{

    protected $fillable = [
        'product_id',
        'image_id'
    ];


    public function upload(){
        return $this->belongsTo(UploadFile::class, 'image_id');
    }
}
