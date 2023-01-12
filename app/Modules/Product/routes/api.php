<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/



Route::group([
    'prefix'=>config('productroute.prefix.api'),
    'namespace' => config('productroute.namespace.api'),
    // 'as' => config('productroute.as.admin'),
    // 'middleware' => ['web']

],function(){

    Route::group(['middleware' => ['JWTMiddleware']], function() {
        Route::get('/allproduct','ProductApiController@allproduct')->name('allproduct');

        Route::get('/product/{id}','ProductApiController@product')->name('product');

        Route::get('/productbyslug/{slug}','ProductApiController@productBySlug')->name('productBySlug');

        Route::get('/filterproduct','ProductApiController@filterproduct')->name('filterproduct');

        Route::post('/productbyprice','ProductApiController@productByPrice')->name('productByPrice');
    });




});


// Route::group(['middleware' => ['JWTMiddleware']], function() {



//     Route::get('/productfilter',[ProductApiController::class,'productfilter'])->name('productfilter');
// });
