<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
Use App\Models\Product;
Use App\Models\News;

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


Route::get('product', function() {
        return Product::all();
});

Route::get('news', function() {
        return News::all();
});
// Route::get('product', 'ProductController@index');


Route::get('product/{id}', function($id) {
        return Product::find($id);
});

Route::get('news/{id}', function($id) {
        return News::find($id);
});


Route::post('news/{id}', function($id) {
        return $id;
});


Route::post('product/{id}', function($id) {
        $data = Product::find($id);
        $num = intval($data['view']);
        $data['view'] = $num+1;

        $product=Product::find($id);
        $product->view = $data['view'];
        $product->save();
        return $product;
});
