<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ThanhPhoStoreRequest extends FormRequest
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
            'ten.required' => "Tỉnh/ thành phố không được phép bỏ trống.",
            'ten.min' => "Độ dài tối thiểu của tỉnh/ thành phố là 3 ký tự.",
        ];
    }
}
