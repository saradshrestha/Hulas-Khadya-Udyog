<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::group([
    'prefix'=>config('categoryroute.prefix.admin'),
    'namespace' => config('categoryroute.namespace.admin'),
    'as' => config('categoryroute.as.admin'),
    'middleware' => ['web','auth']

],function(){

    Route::get('/','CategoryController@index')->name('allCategory');

    Route::get('/addcategory','CategoryController@addCategory')->name('addCategory');

    Route::post('/categorySubmit','CategoryController@CategorySubmit')->name('categorySubmit');

    Route::get('/editcategory/{slug}','CategoryController@editCategory')->name('editCategory');

    Route::post('/editcategorySubmit/{slug}','CategoryController@editCategorySubmit')->name('editCategorySubmit');

    Route::get('/deletecategorycategory/{slug}','CategoryController@deleteCategory')->name('deleteCategory');

    Route::get('/change-category-position/{slug}','CategoryController@changeCategoryPosition')->name('changeCategoryPosition');


    Route::get('/changeStatus','CategoryController@changeStatus')->name('changeStatus');

    Route::get('/changeFeatured','CategoryController@changeFeatured')->name('changeFeatured');

    Route::get('/getproductbycategory/{id}','CategoryController@getproductbycategory')->name('getproductbycategory');
    
});
