<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function postLogin(Request $request){
        if ($request->username == 'anhnt1997' && $request->password == "anhnt1997"){
            return redirect()->route('home')->with(['flag'=> 'success','username' => $request->username]);
        }
        else {
            return redirect()->back()->with(['flag'=> 'danger','notification'=>'Đăng nhập thất bại']);
        }
    }
    public function postSignUp(Request $request){

    }
}
