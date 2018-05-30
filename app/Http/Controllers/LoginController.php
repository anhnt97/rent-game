<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    protected $url = "203.162.166.162:8083/GameApi/account/";
    protected $id;
    protected $content;
    public function postLogin(Request $request){

        $client = new Client(['base_uri' => $this->url]);
        $response = $client->request('GET', 'login');
        $get_result_arr = json_decode($response->getBody()->getContents(), true);
        dd($get_result_arr['content']);
        if ($request->username == "anh" && $request->password == "1"){
            return redirect()->route('home')->with(['flag'=> 'success','username' => $response]);
        }
        else {
            return redirect()->back()->with(['flag'=> 'danger','notification'=>'Đăng nhập thất bại']);
        }
    }
    public function postRegister(Request $request){
        $data_request = [
          'userName' => $request->get('username'),
            'password' => $request->get('password'),
            'email' => $request->get('email'),
            'mobile' => $request->get('phone-number')
        ];
        $client = new Client(['base_uri' => $this->url]);
        $response = $client->post('register',[
            'json' => $data_request
        ]);
        dd($response->getBody()->getContents());
    }
}
