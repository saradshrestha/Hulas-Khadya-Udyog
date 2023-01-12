<?php

namespace Product\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;


class FinalProductRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        return [
            'title' => 'required',
            'description' => 'required',
            'product_id' => 'required',
            // 'image_id' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:1024',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Product Title is Required!!',
            'description.required' => 'Product Description is Required!!',
            'product_id.required' => 'Main Product is Required!!',
            
            // 'image.image' => 'The type of the uploaded file should be an image.',
            // 'image.uploaded' => 'Failed to upload an image. The image maximum size is 2MB.',
        ];
    }
}
