<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Domain\Products\Product;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/', function () {
//    $product = factory(Product::class)->make()->save();
    $product = Product::first();
    $product->name = 'TESTE';
    $product->save();

    dd($product);
});
