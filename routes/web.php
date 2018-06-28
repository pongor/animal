<?php

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
Route::middleware(['web'])->group(function () {
    Route::get('/login',"Backend\LoginController@index"); //登录页面
});

//登录后的路由
Route::middleware(['web','Login'])->group(function () {
    Route::get('/', function () {
        return 321;
    });
    Route::get('/backend', function () {
        return 123;
    });
});
