<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::group([
    'prefix'=>config('testimonialroute.prefix.api'),
    'namespace' => config('testimonialroute.namespace.api'),
    // 'as' => config('productroute.as.admin'),
    // 'middleware' => ['web']

],function(){


});
