<?php

namespace App\Http\Requests;

use App\Service;
use Illuminate\Foundation\Http\FormRequest;

class ServiceUpdateRequest extends FormRequest
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

    public function _construct(Service $service)
    {
        $this->service = $service;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'service_name' => 'required|unique:services,name,'.$this->service->id,
            'service_slug' => 'required|unique:services,slug,'.$this->service->id,
            'service_short_description' => 'required',
            'service_content' => 'required'

        ];
    }
}
