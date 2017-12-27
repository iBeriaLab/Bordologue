<?php

use Illuminate\Http\Request;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::post('/register', ['as' => 'register', 'uses' => 'RegisterController@index']);


Route::group(['namespace' => 'Articles', 'prefix' => '/articles'], function (){
    Route::get('/', ['as' => 'articles', 'uses' => 'ArticleController@index']);
    Route::put('/', ['as' => 'articles.store', 'uses' => 'ArticleController@store']);
    Route::get('/{article}', ['as' => 'articles.show', 'uses' => 'ArticleController@show']);
    Route::post('/{article}', ['as' => 'articles.update', 'uses' => 'ArticleController@update']);
    Route::delete('/{article}', ['as' => 'articles.destroy', 'uses' => 'ArticleController@destroy']);
});

Route::apiResource('/organisations', 'OrganisationController');

Route::group(['prefix'=>'organisation'], function (){
    Route::apiResource('/{organisation}/reviews','ReviewController');
});