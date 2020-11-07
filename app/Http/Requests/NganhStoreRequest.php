<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NganhStoreRequest extends FormRequest
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
            'ten'=>['required','min:3'],
        ];
    }
    public function messages()
    {
        return [
            'ten.required' => "Ngành hoặc lĩnh vực không được phép bỏ trống.",
            'ten.min' => "Độ dài tối thiểu của ngành hoặc lĩnh vực là 3 ký tự.",
        ];
    }
}
