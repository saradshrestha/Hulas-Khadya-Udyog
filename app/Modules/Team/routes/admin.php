<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::group([
    'prefix'=>config('teamroute.prefix.admin'),
    'namespace' => config('teamroute.namespace.admin'),
    'as' => config('teamroute.as.admin'),
    'middleware' => ['web','auth']

],function(){

    Route::get('/','TeamController@index')->name('index');

    Route::get('/create','TeamController@create')->name('create');

    Route::post('/store','TeamController@store')->name('store');

    Route::get('/edit/{slug}','TeamController@edit')->name('edit');

    Route::post('/update/{slug}','TeamController@update')->name('update');

    Route::get('/destroy/{slug}','TeamController@delete')->name('delete');

    Route::get('/changeStatus','TeamController@changeStatus')->name('changeStatus');

    
});
