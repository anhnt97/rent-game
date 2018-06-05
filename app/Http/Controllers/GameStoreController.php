<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\ServerException;

class GameStoreController extends Controller
{
    protected $url = "203.162.166.162:8083/GameApi/gameStore/";

    /**
     *  Create shop
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function postCreate(Request $request){
        $data_request = [
            'name' => $request->get('nameStore'),
            'description' => $request->get('descriptionNameStore')
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
            if ($response->getStatusCode() == '200'){
                $get_result_arr = json_decode($response->getBody()->getContents(), true);
                return redirect()->route('home')->with([
                    'idStore'=> $get_result_arr['id'],
                    'nameStore' => $get_result_arr['name'],
                    'descriptionStore' => $get_result_arr['description']
                ]);
            }
            else {
                return redirect()->back()->with(['flag'=> 'create-fail','notification'=>'Tạo shop thất bại']);
            }
        }
    }

    /**
     * @return string
     */
    public function getListGame(){
        $client = new Client(['base_uri' => $this->url]);
        try{
            $response = $client->get('list');
        }catch (ServerException $e){
            dd($e->getCode());
        }
        if (!empty($response)) {
            return $response->getBody()->getContents();
        }
    }
}
