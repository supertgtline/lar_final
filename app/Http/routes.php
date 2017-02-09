<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('qho_login', [
    'as' => 'getLogin', 'uses' => 'LoginController@getLogin'
]);
Route::post('qho_login', [
    'as' => 'postLogin', 'uses' => 'LoginController@postLogin'
]);
Route::get('logout', [
    'as' => 'getLogout', 'uses' => 'LoginController@getLogout'
]);


Route::group(['middleware' => 'auth'], function () {
    Route::get('/', function ()    {
        // Uses Auth Middleware
    });

    Route::get('user/profile', function () {
        // Uses Auth Middleware
    });
    Route::group(['prefix'=>'qho_admin','namespace'=>'Admin'],function(){
    	Route::get('',function(){
    		return view('admin.module.dashboard.main');
    	});
    	Route::group(['prefix'=>'category'],function(){
    		Route::get('add',['as'=>'getCateAdd','uses'=>'CateController@getCateAdd']);
            Route::post('add',['as'=>'postCateAdd','uses'=>'CateController@postCateAdd']);
            Route::get('list',['as'=>'getCateList','uses'=>'CateController@getCateList']);

    	});
    });
});