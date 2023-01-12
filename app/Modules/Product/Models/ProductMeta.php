<?php

namespace Product\Models;

use Illuminate\Database\Eloquent\Model;

class ProductMeta extends Model
{
    protected $fillable = [
        'title',
        'image_id',
        'product_id'

    ];
}
