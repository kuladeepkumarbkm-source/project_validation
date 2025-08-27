<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

use Illuminate\Support\Str;

use App\Rules\Uppercase;

class UserRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
             'username'=>'required',
            'useremail'=>'required|email',
            'userpassword'=>'required|alpha_num|min:6',
            // 'userage'=>'required|numeric|min:18',
            'userage'=>'required|numeric|between:18,21',
            'usercity'=>'required',
        ];
    }

    // public function messages()
    // {
    //     return [
    //              "username.required"=>':attribute is required!',
    //     "useremail.required"=>'User Email is required!',
    //     "userage.required"=>'User age is required!',
    //     "usercity.required"=>'User city is required!',
    //     "userpassword.required"=>'User Password is required!',

    //     ];
    // }

    public function attributes()
    {
        return[
 'username'=>'User Name',
            'useremail'=>'User Email',
            'userpassword'=>'User Password',
            // 'userage'=>'required|numeric|min:18',
            'userage'=>'User Age',
            'usercity'=>'User City',
        ];
    }

    // protected function prepareForValidation():void
    // {
    //     $this->merge(
    //         [
    //       'username'=>strtoupper($this->username) ,
    //         //'username'=>Str::slug($this->username),

    //         ]
    //         );
    // }

    protected $stopOnFirstFailure=true;
}
