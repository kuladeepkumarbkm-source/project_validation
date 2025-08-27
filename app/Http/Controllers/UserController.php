<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Closure;
//use App\Rules\Uppercase;


class UserController extends Controller
{
    public function addUser(UserRequest $req)
    {
         $validate=$req->validate([
       'username'=>['required',
       function(string $attribute, mixed $value, Closure $fail)
    {
        // if (strtoupper(trim($value)) !== trim($value))
     if(strtoupper($value) !==$value)
      {
            $fail('The :attribute must be uppercase.');
        }
    }],
       'useremail'=>'required|email',
            ]
            );
          //  echo $validate['username'];
    //          dd($validate);
        return $req->all();
    //     $req->validate([
    //         'username'=>'required',
    //         'useremail'=>'required|email',
    //         'userpassword'=>'required|alpha_num|min:6',
    //         // 'userage'=>'required|numeric|min:18',
    //         'userage'=>'required|numeric|between:18,21',
    //         'usercity'=>'required',
    //     ],
    // [
    //     "username.required"=>'User Name is required!',
    //     "useremail.required"=>'User Email is required!',
    //     "userage.required"=>'User age is required!',
    //     "usercity.required"=>'User city is required!',
    //     "userpassword.required"=>'User Password is required!',
    // ]);
        // return $req->all();
        //  return $req->only(['username','usercity']);

    //     $validate=$req->validate(
    //         [
    //    'username'=>['required'],
    //    'useremail'=>'required|email',
    //         ]
    //         );
    //         return $req->all();
        //  return $req->except(['userpassword','usercity']);
    }


}
