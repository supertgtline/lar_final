git<?php

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
  
    Route::group(['prefix'=>'qho_admin','namespace'=>'Admin'],function(){
    	Route::get('/',function(){
            $sta_user = DB::table('qt64_users')->count();
            $sta_category = DB::table('qt64_category')->count();
            $sta_news = DB::table('qt64_news')->count();
    		return view('admin.module.dashboard.main',['sta_user'=>$sta_user,'sta_category'=>$sta_category,'sta_news'=>$sta_news]);
    	});
        
    	Route::group(['prefix'=>'category'],function(){
    		Route::get('add',['as'=>'getCateAdd','uses'=>'CateController@getCateAdd']);
            Route::post('add',['as'=>'postCateAdd','uses'=>'CateController@postCateAdd']);
            Route::get('list',['as'=>'getCateList','uses'=>'CateController@getCateList']);
            Route::get('delete/{id}',['as'=>'getCateDel','uses'=>'CateController@getCateDel'])->where('id', '[0-9]+');;
            Route::get('edit/{id}',['as'=>'getCateEdit','uses'=>'CateController@getCateEdit'])->where('id', '[0-9]+');;
            Route::post('edit/{id}',['as'=>'postCateEdit','uses'=>'CateController@postCateEdit'])->where('id', '[0-9]+');;

    	});
        Route::group(['prefix'=>'user'],function(){
            Route::get('add',['as'=>'getUserAdd','uses'=>'UserController@getUserAdd']);
            Route::post('add',['as'=>'postUserAdd','uses'=>'UserController@postUserAdd']);
            Route::get('list',['as'=>'getUserList','uses'=>'UserController@getUserList']);
            Route::get('delete/{id}',['as'=>'getUserDel','uses'=>'UserController@getUserDel'])->where('id', '[0-9]+');;
            Route::get('edit/{id}',['as'=>'getUserEdit','uses'=>'UserController@getUserEdit'])->where('id', '[0-9]+');;
            Route::post('edit/{id}',['as'=>'postUserEdit','uses'=>'UserController@postUserEdit'])->where('id', '[0-9]+');;
        });
        Route::group(['prefix'=>'news'],function(){
            Route::get('add',['as'=>'getNewsAdd','uses'=>'NewsController@getNewsAdd']);
            Route::post('add',['as'=>'postNewsAdd','uses'=>'NewsController@postNewsAdd']);
            Route::get('list',['as'=>'getNewsList','uses'=>'NewsController@getNewsList']);
            Route::get('delete/{id}',['as'=>'getNewsDel','uses'=>'NewsController@getNewsDel'])->where('id', '[0-9]+');;
            Route::get('edit/{id}',['as'=>'getNewsEdit','uses'=>'NewsController@getNewsEdit'])->where('id', '[0-9]+');;
            Route::post('edit/{id}',['as'=>'postNewsEdit','uses'=>'NewsController@postNewsEdit'])->where('id', '[0-9]+');;

        });
    });
});