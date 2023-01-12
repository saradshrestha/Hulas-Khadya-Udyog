<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::group([
    'prefix'=>config('categoryroute.prefix.api'),
    'namespace' => config('categoryroute.namespace.api'),
    // 'as' => config('productroute.as.admin'),
    // 'middleware' => ['web']

],function(){
    Route::post('provinces','ApiCategoryController@provinces')->name('provinces');


    Route::group(['middleware' => ['JWTMiddleware']], function() {
        Route::get('/allcategories','ApiCategoryController@allcategories')->name('allcategories');

        Route::get('/category/{slug}','ApiCategoryController@CategoryBySlug')->name('categoryBySLug');

        Route::get('/categorybyid/{id}','ApiCategoryController@category')->name('category');
    });


});
