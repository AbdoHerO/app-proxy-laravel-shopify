<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/graphql', [App\Http\Controllers\ApiShopifyGraphQl::class, 'index'])->name('graphql.home');
Route::get('/rest', [App\Http\Controllers\ApiShopifyRest::class, 'index'])->name('rest.home');
Route::get('/shopify-graphql', [App\Http\Controllers\ShopifyGraphqlController::class, 'index'])->name('shopify-graphql.home');
Route::get('/shopify-rest', [App\Http\Controllers\ShopifyRestController::class, 'index'])->name('shopify-rest.home');

Route::get('/verify_customer', [App\Http\Controllers\VerifyCustomerExistRestController::class, 'index'])->middleware(['cors'])->name('verify_customer.home');

