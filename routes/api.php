<?php

use Illuminate\Http\Request;
use App\Http\Resources;
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

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});
Route::middleware(['api','Check'])->group(function(){
    Route::get("/user","Api\IndexController@index");
});
Route::get("/test","Api\IndexController@index");
