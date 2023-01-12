<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



Route::group([
    'prefix'=>config('productroute.prefix.admin'),
    'namespace' => config('productroute.namespace.admin'),
    'as' => config('productroute.as.admin'),
    'middleware' => ['web','auth']

],function(){

    Route::group([
        'prefix'=> '/product',
        'as' => 'product.',
    ],function(){

    Route::get('/','ProductController@index')->name('allProducts');

    Route::get('/addproduct','ProductController@addProduct')->name('addProduct');

    Route::post('/addproductsubmit','ProductController@addProductSubmit')->name('addProductSubmit');

    Route::get('/editproduct/{slug}','ProductController@editProduct')->name('editProduct');

    Route::post('/editproductSubmit/{slug}','ProductController@editProductSubmit')->name('editProductSubmit');

    Route::get('/deleteproduct/{id}','ProductController@deleteProduct')->name('deleteProduct');

    Route::post('/product/image/upload','ProductController@productImageUpload')->name('image.upload');

    Route::post('/product/image/delete','ProductController@productImagedelete')->name('image.delete');

    Route::get('/product/changestatus','ProductController@changeStatus')->name('changeStatus');

    Route::get('/product/changefeature','ProductController@changeFeature')->name('changeFeature');

    Route::post('/searchproduct','ProductController@searchProduct')->name('searchProduct');

    Route::get('/deletespecs/{id}','ProductController@deleteSpecification')->name('deleteSpecification');

    Route::get('/deleteimage/{id}','ProductController@deleteProductImage')->name('deleteProductImage');

    });

    Route::group([
        'prefix'=> '/finished-products',
        'as' => 'finishedProduct.',
    ],function(){
        Route::get('/','FinishedProductController@index')->name('index');
        Route::get('/create','FinishedProductController@create')->name('create');
        Route::post('/store','FinishedProductController@store')->name('store');
        Route::get('/edit/{slug}','FinishedProductController@edit')->name('edit');
        Route::post('/update/{slug}','FinishedProductController@update')->name('update');
        Route::get('/delete/{slug}','FinishedProductController@delete')->name('delete');
        Route::post('/search-final-product','FinishedProductController@searchFinalProduct')->name('searchFinalProduct');

    });

});
