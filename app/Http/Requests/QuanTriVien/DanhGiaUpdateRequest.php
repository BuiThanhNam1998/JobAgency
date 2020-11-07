<?php

namespace App\Http\Requests\QuanTriVien;

use Illuminate\Foundation\Http\FormRequest;

class DanhGiaUpdateRequest extends FormRequest
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
            'diemchuyenmon'=>['required','numeric','max:100'],
            'nhanxet'=>['required','min:17'],
        ];
    }
    public function messages()
    {
        return [
            'diemchuyenmon.required' => "Điểm chuyên môn của ứng viên không được phép bỏ trống.",
            'diemchuyenmon.numeric' => "Điểm chuyên môn của ứng viên chỉ được phép nhập số.",
            'diemchuyenmon.max' => "Điểm chuyên môn của ứng viên chỉ được chấm trên thang điểm 100.",
            'nhanxet.required' => "Nhận xét không được phép bỏ trống.",
            'nhanxet.min' => "Độ dài tối thiểu của nhận xét là 10 ký tự.",
        ];
    }
}
