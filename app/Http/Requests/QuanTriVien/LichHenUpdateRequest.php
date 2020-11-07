<?php

namespace App\Http\Requests\QuanTriVien;

use Illuminate\Foundation\Http\FormRequest;

class LichHenUpdateRequest extends FormRequest
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
            'thoigian'=>['required'],
            'diadiem'=>['required','min:5'],
            'mota'=>['required','min:17'],
            'nhanvien_ids'=>['required'],
        ];
    }
    public function messages()
    {
        return [
            'thoigian.required'=>"Thời gian không được phép bỏ trống.",
            'diadiem.required'=>"Địa điểm không được phép bỏ trống.",
            'diadiem.min'=>"Độ dài tối thiểu của địa điểm là 5 ký tự.",
            'mota.required'=>"Mô tả không được phép bỏ trống.",
            'mota.min'=>"Độ dài tối thiểu của mô tả là 10 ký tự.",
            'nhanvien_ids.required'=>'Không được bỏ trống mục nhân viên tham gia',
        ];
    }
}
