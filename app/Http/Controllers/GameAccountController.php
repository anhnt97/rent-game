<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GameAccountController extends Controller
{

    /**
     * @param Request $request
     * @return mixed
     */
    public function postCreate(Request $request){

        $data_request = [
            'gameId' => $request->get('gameId'),
            'account'  => $request->get('gameAccount'),
            'password' => $request->get('gamePassword'),
            'rentTime' => $request->get('GameRentTime'),
            'rentExpireTime' => $request->get('gameRentExpireTime')
        ];
        $client = new Client(['base_uri' => $this->url]);
        try{
            $response = $client->post('create',[
                'json' => $data_request
            ]);
        }catch (ServerException $e){
            dd($e->getCode());
        }
        if (!empty($response)) {
            return $response;
        }
    }

    /**
     * @return mixed
     */
    public function getListGameAccount(Request $request){
        $data_request = [
            'gameId' => $request->get('gameId')
        ];
        $client = new Client(['base_uri' => $this->url]);
        try{
            $response = $client->get('list',[
                'json' => $data_request
            ]);
        }catch (ServerException $e){
            dd($e->getCode());
        }
        if (!empty($response)) {
            return $response;
        }
    }

    /**
     * @param Request $request
     * @return mixed
     */
    public function deleteGameAccount(Request $request){
        $data_request = [
            'gameId' => $request->get('gameId'),
            'id' => $request->get('idAccount')
        ];
        $client = new Client(['base_uri' => $this->url]);
        try{
            $response = $client->delete('delete',[
                'json' => $data_request
            ]);
        }catch (ServerException $e){
            dd($e->getCode());
        }
        if (!empty($response)) {
            return $response;
        }
    }


}
