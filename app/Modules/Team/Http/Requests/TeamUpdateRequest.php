<?php

namespace Team\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;


class TeamUpdateRequest extends FormRequest
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
            'name' => 'required|string|max:255',
         
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2024',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Name is Required!!',
            'image.image' => 'The type of the uploaded file should be an image.',
            'image.max' => 'Failed to upload an image. The image maximum size is 2MB.',
        ];
    }
}
