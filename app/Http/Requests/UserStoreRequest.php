<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserStoreRequest extends FormRequest
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
            'name'=>['required','min:5'],
            'email'=>['required','email', 'unique:users,email'],
            'password'=>['required','min:8', 'confirmed'],
        ];
    }
    public function messages()
    {
        return [
            'name.required'=>"Tên không được phép bỏ trống.",
            'name.min'=>"Độ dài tối thiểu của tên là 5 ký tự.",
            'email.required'=>"Email không được phép bỏ trống.",
            'email.email'=>"Định dạng của email không đúng.",
            'email.unique'=>"Địa chỉ email đã tồn tại",
            'password.required'=>"Mật khẩu không được phép bỏ trống.",
            'password.min'=>"Độ dài tối thiểu của mật khẩu là 8 ký tự.",
            'password.confirmed'=>"Nhập lại mật khẩu không đúng",
        ];
    }
}
