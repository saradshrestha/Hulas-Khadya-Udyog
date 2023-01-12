<?php

namespace Product\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Auth;
use Order\Models\ProductRating;

class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {

        return [
            'id' => $this->id,
            'title' => $this->title,
            'slug' => $this->slug,
            'feature_image' => $this->feature_url,
            'description' => $this->description,
            'short_description' => $this->short_description,
            'product_price' => $this->product_price,
            'discount_price' => $this->discount_price,
            'stock_qty' => $this->stock_qty,
            'unit_in' => $this->unit_in,
            'minimum_order' => $this->minimum_order,
            'warning_qty' => $this->warning_qty,
            'meta_title' => $this->meta_title,
            'meta_description' => $this->meta_description,
            'barcode' => $this->barcode,
            'discount_percent' => $this->discount_percent,
            'product_images' => $this->product_images,
            'product_rating' => ProductRatingResource::collection($this->Rating),
            'averagerating' => ProductRating($this->Rating)

        ];
    }


}
