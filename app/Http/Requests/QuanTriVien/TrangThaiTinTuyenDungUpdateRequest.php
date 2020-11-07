<?php

namespace App\Http\Requests\QuanTriVien;

use Illuminate\Foundation\Http\FormRequest;

class TrangThaiTinTuyenDungUpdateRequest extends FormRequest
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
            'ten.required' => "Trạng thái tin tuyển dụng không được phép bỏ trống.",
            'ten.min' => "Độ dài tối thiểu của trạng thái tin tuyển dụng là 3 ký tự.",
        ];
    }
}
