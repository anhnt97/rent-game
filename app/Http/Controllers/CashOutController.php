<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CashOutController extends Controller
{
    protected $url = "203.162.166.162:8083/GameApi/cashout";
    public function postCashOut(Request $request){
        $data_request = [
            'accountId' => $request->get('accountId'),
            'shopName'  => $request->get('nameShop'),
            'gameId' => $request->get('gameId')
        ];
        $client = new Client(['base_uri' => $this->url]);
        try{
            $response = $client->post('rent',[
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
