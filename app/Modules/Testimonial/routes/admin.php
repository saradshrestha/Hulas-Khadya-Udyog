<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::group([
    'prefix'=>config('testimonialroute.prefix.admin'),
    'namespace' => config('testimonialroute.namespace.admin'),
    'as' => config('testimonialroute.as.admin'),
    'middleware' => ['web','auth']

],function(){

    Route::get('/','TestimonialController@index')->name('index');

    Route::get('/create','TestimonialController@create')->name('create');

    Route::post('/store','TestimonialController@store')->name('store');

    Route::get('/edit/{slug}','TestimonialController@edit')->name('edit');

    Route::post('/update/{slug}','TestimonialController@update')->name('update');

    Route::get('/destroy/{slug}','TestimonialController@delete')->name('delete');

    Route::get('/changeStatus','TestimonialController@changeStatus')->name('changeStatus');

    
});
