<?php

namespace Product\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


class ProductUpdate extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required',
            'is_featured' => 'required',
            // 'category' => 'required',
            // 'description' => 'required',
            // 'short_desc' => 'required',
            // 'product_specs' => 'required',
            // 'product_position' => 'required',
           
    
          
            'feature_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:1024',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Product Title is Required!!',
            'is_featured.required' => 'Please Select Is_Featured Status!!',
            // 'description.required' => 'Product Overview is Required!!',
            'short_desc.required' => 'Product Main Feature is Required!!',
            // 'product_specs.required' => 'Product Specification is Required!!',

            'feature_image.image' => 'The type of the uploaded file should be an image.',
            'feature_image.uploaded' => 'Failed to upload an image. The image maximum size is 2MB.',
        ];
    }
}
