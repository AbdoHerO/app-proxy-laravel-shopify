<?php

namespace App\Http\Controllers;
use Gnikyt\BasicShopifyAPI\BasicShopifyAPI;
use Gnikyt\BasicShopifyAPI\Options;
use Gnikyt\BasicShopifyAPI\Session;

use Illuminate\Http\Request;

class ApiShopifyRest extends Controller
{
    public function index(){
        // Create options for the API
        // $options = new Options();
        // $options->setVersion('2023-01');

        // // Create the client and session
        // $api = new BasicShopifyAPI($options);
        // $api->setSession(new Session('biolina-shop.myshopify.com', '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'));

        // $result = $api->graph('{ customers (first: 50) { edges { node { id email } } } }');
        // // { customers (first: 50) { edges { node { id email } } } }
        // // echo $result['body']['shop']['products']['edges'][0]['node']['handle']; // test-product

        // // $result = [];
        // return view('graphql.index' , ['result' =>$result]);
    }
}
