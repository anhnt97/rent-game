<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GameController extends Controller
{
    protected $url = "203.162.166.162:8083/GameApi/game";
    public function postCreate(Request $request){
        $data_request = [
            'storeId' => $request->get('storeIdGame'),
            'name'  => $request->get('nameGame'),
            'description' => $request->get('descriptionGame'),
            'thumbImage' => $request->get('thumbImageGame')
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
    public function getListGameByStore(Request $request){
        $data_request = [
            'storeId' => $request->get('storeIdGame')
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
    public function deleteGame(Request $request){
        $data_request = [
            'storeId' => $request->get('storeId'),
            'id' => $request->get('idGame')
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
