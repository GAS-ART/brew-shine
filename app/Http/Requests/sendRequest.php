<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class sendRequest extends FormRequest
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
            'name'=>'required|min:2|max:80|regex:/^[^0-9]+$/',
            'phone'=>'required|regex:/^((\s*)?(\+)?)([- _():=+]?\d[- _():=+]?){10,12}(\s*)?$/',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => __('popup.error.name_required'),
            'name.min'      => __('popup.error.name_min'),
            'name.max'      => __('popup.error.name_max'),
            'name.regex'    => __('popup.error.name_regex'),
            'phone.regex'   => __('popup.error.phone_regex'),
            'phone.required'=> __('popup.error.phone_required'),
        ];
    }
}
