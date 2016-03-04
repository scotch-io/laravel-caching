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

\Illuminate\Support\Facades\Event::listen('illuminate.query', function($q){
    \Illuminate\Support\Facades\Log::info($q);
});

Route::group(['prefix' => 'api'], function(){
    Route::get('articles', 'ArticlesController@index');
});

Route::get('/', function () {
    return view('welcome');
});
