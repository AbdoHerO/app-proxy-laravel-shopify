<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Shopify\PrivateApp;
use Shopify\PublicApp;

class ShopifyRestController extends Controller
{
    public function index(Request $request)
    {

        $api_params['version'] = '2023-01';
        $shop = 'biolina-shop.myshopify.com';
        $api_key = 'edd4011050eae3cea16b37f25a6e8271';
        $api_secret_key = 'b035845d1d5a6a3b3b1e6965f62937b2';
        $password = 'b035845d1d5a6a3b3b1e6965f62937b2';
        $data = [];
        $response = false;
        // $client = new PrivateApp($shop, $api_key, $password, $api_params);
        // $result = $client->call('GET','products',['limit'=>250]);
        // print_r($result);

        $client = new PublicApp($shop, $api_key, $api_secret_key, $api_params);

        $client->setAccessToken('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');
        $data = $client->call('GET','customers',['limit'=>250]);
        
        $email_param = $request->email;
        foreach ($data as $customer) {
            if($customer->email == $email_param){
                $response = true;
            }
        }

        return response()->json([ 'result' => $response ]
        );
        // return view('graphql.index', ['result' => $data]);

    }
}
