<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class LoginController extends Controller
{
    public function getLogin()
    {
        return view('backend.login');
    }

    public function postLogin(Request $req)
    {
        $attempt = Auth::attempt(['email'=>$req->email,'password'=>$req->password]);
        
        if($attempt)
        {
           return redirect()->intended('admin/home');
        }else{
            return back()->withInput()->with('error','Email Hoặc Mật Khẩu Không Đúng');
        }
    }
}
