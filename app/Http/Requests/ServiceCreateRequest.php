<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ServiceCreateRequest extends FormRequest
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
            'service_name' => 'required|unique:services,name',
            'service_slug' => 'required|unique:services,slug',
            'service_icon' => 'required',
            'featured_img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'page_img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'service_short_description' => 'required',
            'service_content' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'service_name.required' => 'A :attribute for this Service is required',
            'service_name.unique' => 'A :attribute with this name already Exists',
            'service_slug.required' => 'A :attribute for this Service is required',
            'service_slug.unique' => 'Duplicate slug already exists',
            'featured_img.required' => 'A :attribute is required.',
            'featured_img.image' => 'The :attribute needs to be an image',
            'featured_img.mimes' => 'The :attribute can only be jpeg, png, jpg, gif, svg',
            'featured_img.max' => 'The uploaded :attribute cannot be bigger than 2MB',
            'page_img.required' => 'A :attribute is required.',
            'page_img.image' => 'The :attribute needs to be a image (jpeg,png,jpg,giv,svg)',
            'page_img.max' => 'The uploaded :attribute cannot be bigger than 2MB',
            'service_short_description' => 'A :attribute is required',
            'service_content' => ':attribute is required'
        ];
    }

    public function attributes()
    {
        return[
            'service_name' => 'title',
            'service_slug' => 'slug',
            'featured_img' => 'featured image',
            'page_img' => 'page image',
            'service_short_description' => 'short description',
            'service_content' => 'service content'
        ];

    }
}
