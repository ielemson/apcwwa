<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
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
            'post_title' => 'required',
            'post_type' => 'required',
            'state_id' => 'nullable',
            'lga_id' => 'nullable',
            'post_body' => 'required',
            'featured_image' => 'nullable',
            // 'image.*' => 'mimes:jpeg,png,jpg,gif,svg|max:2048',
            'category_id' => 'required',
        ];
    }
}
