<?php

use Illuminate\Http\Request;

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

// Route::groupメソッドの最初の引数は、共通の属性を配列で指定するという意味
// Route::group(['middleware' => ['api']] のメソッド配下で定義されたルーティングは全てapi middlewareを介します
Route::group(['middleware' => ['api']], function () {
  Route::get('information', 'Api\InformationController@index');
  Route::get('category', 'Api\CategoryController@index');
});
