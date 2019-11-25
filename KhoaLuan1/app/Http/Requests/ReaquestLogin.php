<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReaquestLogin extends FormRequest
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
            //
            ['email'=>'required|email',
            'password'=>'required|min:6|max:32',],[
                'email.required'=>'Ban chua nhap email',
                'email.email'=>'Email chua dung dinh dang',
                'password.required'=>'Ban chua nhap password',
                'password.min'=>'Ban nhap password qua ngan',
                'password.max'=>'Ban nhap password qua dai',
            ]
        ];
    }
}
