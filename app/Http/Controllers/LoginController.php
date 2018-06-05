<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Exception\ServerException;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    protected $url = "203.162.166.162:8083/GameApi/";

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function postLogin(Request $request){
        $this->activateAccount($request->get('username'));
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
            dd($e->getMessage());
        }

        if ($response->getStatusCode() == '200'){
            return redirect()->route('home')->with(['flag'=> 'login-success','username' => $request->get('username')]);
        }
        else {
            return redirect()->back()->with(['flag'=> 'login-fail','notification'=>'Đăng nhập thất bại']);
        }
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|int
     */
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
                $this->activateAccount($data_request['userName']);
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
     * Activate user after register
     * @param String $username
     */
    public function activateAccount(String $username){
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
        catch (RequestException $requestException){
            if ($requestException->getResponse()->getStatusCode() == '400') {
                echo "Got response 400";
            }

        }
    }

    /**
     * @param String $username
     */
    public function deactivateAccount(String $username){
        $data_request = [
            'userName' => $username
        ];
        $client = new Client(['base_uri' => $this->url]);
        try{
            $response = $client->put('user/disactive',[
                'json' => $data_request
            ]);
            dd($response->getStatusCode());
        }catch (ServerException $e){
            dd($e->getCode());
        }
    }

    /**
     * Get list user
     */
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
