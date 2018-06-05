<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShopController extends Controller
{
    protected $url = "203.162.166.162:8083/GameApi/shop";

    /**
     * @param Request $request
     * @return mixed
     */
    public function postOpenShop(Request $request){
        $data_request = [
            'alias' => $request->get('aliasShop'),
            'name'  => $request->get('nameShop'),
            'iconPath' => $request->get('iconPathShop'),
            'facebookLink' => $request->get('facebookLinkShop')
        ];
        $client = new Client(['base_uri' => $this->url]);
        try{
            $response = $client->post('open',[
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
    public function getListShop(){
        $client = new Client(['base_uri' => $this->url]);
        try{
            $response = $client->post('list');
        }catch (ServerException $e){
            dd($e->getCode());
        }
        if (!empty($response)) {
            return $response;
        }
    }

}
