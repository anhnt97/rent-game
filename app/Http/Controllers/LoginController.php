<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\ServerException;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    protected $url = "203.162.166.162:8083/GameApi/";
    public function postLogin(Request $request){
        $this->activeAccount($request->get('username'));
        $data_request = [
            'userName' => $request->get('username'),
            'password' => $request->get('password')
        ];
        $client = new Client(['base_uri' => $this->url]);
        try{
            $response = $client->post('account/login',[
                'json' => $data_request
            ]);
        }catch (ServerException $e){
            dd($e->getCode());
        }

        if ($response->getStatusCode() == '200'){
            return redirect()->route('home')->with(['flag'=> 'login-success','username' => $request->get('username')]);
        }
        else {
            return redirect()->back()->with(['flag'=> 'login-fail','notification'=>'Đăng nhập thất bại']);
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
        try{
            $response = $client->post('account/register',[
                'json' => $data_request
            ]);
            if ($response->getStatusCode() == '200'){
                $this->activeAccount($data_request['userName']);
                return redirect()->back()->with(['flag'=> 'register-success','notification'=>'Đăng ký thành công']);
            }
            else{
                return redirect()->back()->with(['flag'=> 'register-fail','notification'=>'Đăng ký thất bại']);
            }
        }catch (ServerException $e){
                dd($e);
        }
        return 0;
    }

    /**
     * @param String $username
     */
    public function activeAccount(String $username){
        $data_request = [
            'userName' => $username
        ];
        $client = new Client(['base_uri' => $this->url]);
        try{
            $response = $client->put('user/active',[
                'json' => $data_request
            ]);
            dd($response->getStatusCode());
        }catch (ServerException $e){
            dd($e->getCode());
        }
    }
    public function listUser(){
        $client = new Client(['base_uri' => $this->url]);
        try{
            $response = $client->get('user/list');
            dd($response->getStatusCode());
        }catch (ServerException $e){
            dd($e->getResponse()->getBody()->getContents());
        }
    }
}
