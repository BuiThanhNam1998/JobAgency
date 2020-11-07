<?php

namespace App\Http\Requests\QuanTriVien;

use App\Rules\Du18Tuoi;
use App\Rules\NgayBatDauCoTheLamViec;
use App\Rules\NgayCapCMTHopLe;
use Illuminate\Foundation\Http\FormRequest;

class HoSoUpdateRequest extends FormRequest
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
//            'cv'=>['required'],
            'ten'=>['required','min:5'],
            'socmt'=>['required','min:9','max:12','regex:/^[0-9]{9,}$/i'],
            'ngaycapcmt'=>['required',new NgayCapCMTHopLe],
            'ngaysinh'=>['required', new Du18Tuoi],
//            'ngaycothebatdaulamviec'=>[new NgayBatDauCoTheLamViec],
            'sodienthoai'=>['required','min:10','regex:/^[0-9]{10,}$/i'],
            'email'=>['required','email'],
            'quanhuyen'=>['required','min:1'],
            'diachichitiet'=>['required','min:5'],
            'hocvan'=>['required','min:3'],
            'kinhnghiemlamviec'=>['required','min:17'],
        ];
    }
    public function messages()
    {
        return [
//            'cv.required'=>"CV không được phép bỏ trống.",
            'ten.required'=>"Họ và tên không được phép bỏ trống.",
            'ten.min'=>"Độ dài tối thiểu của họ và tên là 5 ký tự.",
            'socmt.required'=>"Số chứng minh thư không được phép bỏ trống.",
            'socmt.min'=>"Độ dài tối thiểu của số chứng minh thư là 9 số.",
            'socmt.max'=>"Độ dài tối đa của số chứng minh thư là 12 số.",
            'socmt.regex'=>"Số chứng minh thư chỉ được phép nhập số.",
            'ngaycapcmt.required'=>"Ngày cấp chứng minh thư không được phép bỏ trống.",
            'ngaysinh.required'=>"Ngày sinh không được phép bỏ trống.",

            'sodienthoai.required'=>"Số điện thoại không được phép bỏ trống.",
            'sodienthoai.min'=>"Độ dài tối thiểu của số điện thoại là 10 ký tự.",
            'sodienthoai.regex'=>"Số điện thoại chỉ được phép nhập số",
            'email.required'=>"Email không được phép bỏ trống.",
            'email.email'=>"Định dạng của email không đúng.",
            'quanhuyen.required'=>"Quận/huyện không được phép bỏ trống.",
            'quanhuyen.min'=>"Độ dài tối thiểu của quận/huyện là 1 ký tự.",
            'diachichitiet.required'=>"Địa chỉ chi tiết không được phép bỏ trống.",
            'diachichitiet.min'=>"Độ dài tối thiểu của địa chỉ chi tiết là 5 ký tự.",
            'hocvan.required'=>"Học vấn không được phép bỏ trống.",
            'hocvan.min'=>"Độ dài tối thiểu của học vấn là 3 ký tự.",
            'kinhnghiemlamviec.required'=>"Kinh nghiệm làm việc không được phép bỏ trống.",
            'kinhnghiemlamviec.min'=>"Độ dài tối thiểu của kinh nghiệm làm việc là 10 ký tự.",
        ];
    }
}
