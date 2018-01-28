<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests;
use App\Http\Model\User;
use Illuminate\Support\Facades\Input;
use Crypt;
use Validator;

class LoginController extends Controller
{
    public function Admin()
    {
        return view('Admin.index');
    }

    public function index()
    {
        return view('Admin.login');
    }

    public function login()
    {
        if($input=Input::all()){
            $user=User::first();
            if($user->UserName != $input['user_name'] && Crypt::decrypt($user->Password) != $input['user_pass'])
            {
                return redirect()->back()->with(['status' => 'failed','message' => '帳號或密碼錯誤']);
            }

            session(['user'=>$user]);
            

            return redirect('Admin');
        }else{
            
            return redirect('Admin/Login');
        }
    }

    public function crypt()
    {
        $str="password";
        echo Crypt::encrypt($str);
    }

    public function logout()
    {
        session(['user'=>null]);
        return redirect('Admin/Login');
    }
}
