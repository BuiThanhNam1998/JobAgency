<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TinTuyenDungStoreRequest extends FormRequest
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
            'tieude'=>['required','min:5'],
            'mota'=>['required','min:17'],
            'ngaydang'=>['required'],
        ];
    }
    public function messages()
    {
        return [
            'tieude.required'=>"Tiêu đề không được phép bỏ trống.",
            'tieude.min'=>"Độ dài tối thiểu của tiêu đề là 5 ký tự.",
            'mota.required'=>"Mô tả không được phép bỏ trống.",
            'mota.min'=>"Độ dài tối thiểu của mô tả là 10 ký tự.",
            'ngaydang.required'=>"Ngày đăng không được phép bỏ trống.",
        ];
    }
}
