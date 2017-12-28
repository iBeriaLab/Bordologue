<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrganisationRequest extends FormRequest
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
            'name' => 'required|max:255|unique:organisations',
            'description' => 'required',
            'image' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'longitude' => 'required',
            'latitude' => 'required',
            'user_id' => 'required'
        ];
    }
}
