<?php

namespace Category\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryStore extends FormRequest
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
            'category_banner' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Category Title is Required!!',
            'category_banner.required' => 'Category Banner Is Required',

        ];
    }
}
