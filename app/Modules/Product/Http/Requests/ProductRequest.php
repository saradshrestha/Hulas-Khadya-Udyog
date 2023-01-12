<?php

namespace Product\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


class ProductRequest extends FormRequest
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
            // 'purchase_link' => 'required',
            // 'category' => 'required',
            'feature_image' => 'required',
            // 'description' => 'required',
            // 'short_desc' => 'required',
            // 'product_specs' => 'required',
            // 'product_position' => 'required',
            // 'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:1024',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Product Title is Required!!',
            'is_featured.required' => 'Please Select Is_Featured Status!!',
            'description.required' => 'Product Overview is Required!!',
            'short_desc.required' => 'Product Feature is Required!!',
            'descriproduct_specstion.required' => 'Product Specification is Required!!',
            // 'image.image' => 'The type of the uploaded file should be an image.',
            // 'image.uploaded' => 'Failed to upload an image. The image maximum size is 2MB.',
        ];
    }
}
