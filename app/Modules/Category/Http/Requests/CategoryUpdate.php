<?php

namespace Category\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryUpdate extends FormRequest
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
            'parent' => 'not_in:' . $this->category_id,
            'category_banner' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Category Title is Required!!',
            'parent_id.not_in' => 'Cannot assign same as parent!!',
            'category_banner.required' => 'Category Banner Is Required.'

        ];
    }
}
