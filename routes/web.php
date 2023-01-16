<?php

use Illuminate\Support\Facades\Route;


Route::group(
    [   'namespace' => 'Auth',    ],
    function () {
        Route::post('/logout', 'LoginController@logout')->name('logout');
        Route::get('/admin', 'LoginController@adminLogin')->name('admin.login');
        Route::get('/admin/login', 'LoginController@adminLogin')->name('admin.login');
        Route::post('/admin/login/submit', 'LoginController@adminLoginPost')->name('admin.login.post');
        Route::get('/admin/forgetpassword', 'LoginController@adminForgetPassword')->name('admin.forgetpassword');
        Route::post('/admin/forgetpassword', 'LoginController@adminForgetPasswordPost')->name('admin.forgetpassword.Post');
        Route::get('/user/activate/{user_id}/{code}', 'LoginController@activate')->name('user.activate');
        Route::get('admin/resetpassword/{email}/{code}', 'LoginController@resetPassword')->name('admin.resetpassword');
        Route::post('admin/resetpassword/', 'LoginController@resetPasswordPost')->name('admin.resetpassword.post');
    }
);


Route::group(
    [
        'prefix' => 'backend',
        'as' => 'admin.',
        'namespace' => 'Backend',
        'middleware' => 'auth',
    ],
    function () {
        Route::get('/', 'DashboardController@index')->name('dashboard');
        Route::get('/search', 'DashboardController@search')->name('search');
        Route::get('/clearview', 'DashboardController@clearview')->name('clearview');
        Route::get('/clearconfig', 'DashboardController@clearconfig')->name('clearconfig');
        Route::get('/clearcache', 'DashboardController@clearcache')->name('clearcache');

        //    post type
        Route::get('/post_type', 'PostTypeController@index')->name('post_type');
        Route::get('/post_type/create', 'PostTypeController@create')->name('post_type.create');
        Route::post('/post_type/store', 'PostTypeController@store')->name('post_type.store');
        Route::get('/post_type/delete/{slug}', 'PostTypeController@destroy')->name('post_type.delete');
        Route::get('/post_type/edit/{slug}', 'PostTypeController@edit')->name('post_type.edit');
        Route::post('/post_type/update', 'PostTypeController@update')->name('post_type.update');
        Route::get('/post_type/order', 'PostTypeController@ordering')->name('post_type.order');
        Route::post('/post_type/order/store', 'PostTypeController@orderStore')->name('post_type.order.store');

        //    gobal post
        Route::get('/post/{post_type}', 'GobalController@index')->name('post');
        Route::get('/post/{post_type}/create', 'GobalController@create')->name('post.create');
        Route::post('/post/{post_type}/store', 'GobalController@store')->name('post.store');
        Route::get('/post/{post_type}/delete/{slug}', 'GobalController@destroy')->name('post.delete');
        Route::get('/post/{post_type}/edit/{slug}', 'GobalController@edit')->name('post.edit');
        Route::post('/post/{post_type}/update', 'GobalController@update')->name('post.update');
        Route::get('/post/{post_type}/order', 'GobalController@ordering')->name('post.order');
        Route::post('/post/{post_type}/order/store', 'GobalController@orderStore')->name('post.order.store');
        Route::get('/post/delete/field_file/{id}', 'GobalController@deleteFieldFile')->name('post.delete.field_file');
        Route::get('/post/{post_type}/trash', 'GobalController@getTrash')->name('post.trash');
        Route::get('/post/{post_type}/log', 'GobalController@log')->name('post.log');
        Route::get('/post/{post_type}/restore/{slug}', 'GobalController@getRestore')->name('post.restore');
        Route::get('/post/{post_type}/forcedelete/{slug}', 'GobalController@forceDelete')->name('post.forcedelete');

        //    custom field
        Route::get('/custom_field', 'CustomFieldController@index')->name('custom_field');
        Route::get('/custom_field/create', 'CustomFieldController@create')->name('custom_field.create');
        Route::post('/custom_field/store', 'CustomFieldController@store')->name('custom_field.store');
        Route::get('/custom_field/delete/{slug}', 'CustomFieldController@destroy')->name('custom_field.delete');
        Route::get('/custom_field/edit/{slug}', 'CustomFieldController@edit')->name('custom_field.edit');
        Route::post('/custom_field/update', 'CustomFieldController@update')->name('custom_field.update');
        Route::get('/custom_field/field', 'CustomFieldController@getField')->name('custom_field.field');
        Route::get('/custom_field/field/delete,{id}', 'CustomFieldController@deleteField')->name('custom_field.field.delete');
        Route::get('/custom_field/{slug}/field_position', 'CustomFieldController@filedPosition')->name('custom_field.field_position');
        Route::post('/custom_field/filed/order/store', 'CustomFieldController@orderStore')->name('custom_field.field.order.store');

        //    User
        Route::get('/user', 'UserController@index')->name('user');
        Route::get('/user/create', 'UserController@create')->name('user.create');
        Route::post('/user/store', 'UserController@store')->name('user.store');
        Route::get('/user/delete/{id}', 'UserController@destroy')->name('user.delete');
        Route::get('/user/edit/{id}', 'UserController@edit')->name('user.edit');
        Route::post('/user/update', 'UserController@update')->name('user.update');
        Route::post('/user/password-change', 'UserController@passwordChange')->name('user.passwordChange');
        Route::get('/user/profile', 'UserController@myProfile')->name('user.profile');
        Route::post('/user/profile/update', 'UserController@myProfileUpdate')->name('user.profile.update');


        //Static Blog
        Route::get('/static/content', 'StaticContentController@index')->name('static.content');
        Route::get('/static/content/create', 'StaticContentController@create')->name('static.content.create');
        Route::post('/static/content/store', 'StaticContentController@store')->name('static.content.store');
        Route::get('/static/content/delete/{slug}', 'StaticContentController@destroy')->name('static.content.delete');
        Route::get('/static/content/edit/{slug}', 'StaticContentController@edit')->name('static.content.edit');
        Route::post('/static/content/update', 'StaticContentController@update')->name('static.content.update');

        Route::get('site', 'SiteController@index')->name('site');
        Route::post('site', 'SiteController@update')->name('site.update');

        Route::get('analytic', 'AnalyticController@index')->name('analytic');
        Route::get('analytic/realtime', 'AnalyticController@getRealTimeVisitor')->name('analytic.realtime');

        Route::get('contact', 'ContactController@index')->name('contact');
        Route::get('contact/{id}', 'ContactController@show')->name('contact.show');
        Route::get('contact/delete/{id}', 'ContactController@destroy')->name('contact.delete');

        Route::get('career', 'CareerController@index')->name('career');
        Route::get('career/{id}', 'CareerController@show')->name('career.show');
        Route::get('career/delete/{id}', 'CareerController@destroy')->name('career.delete');

    }
);


Route::group(
    [
        'namespace' => 'front',
    ],
    function () {

        Route::get('/', 'HomeController@index')->name('index');

        Route::get('/about-us', 'HomeController@aboutUs')->name('aboutus');

        Route::get('/products', 'HomeController@getProduct')->name('products');

        Route::get('/product/filter/{id}','HomeController@productFilter')->name('productFilter');

        Route::get('/product/{slug}', 'HomeController@productSingle')->name('productSingle');


        
        Route::get('/recipes', 'HomeController@getRecipe')->name('recipes');

        Route::get('/recipe/filter/{id}','HomeController@recipeFilter')->name('recipeFilter');

        Route::get('/recipe/{slug}', 'HomeController@recipeSingle')->name('recipeSingle');
        

        Route::get('/category/{slug}/products', 'HomeController@productsByCategory')->name('productsByCategory');

        Route::get('/contact-us', 'HomeController@getContact')->name('contact');

        Route::post('/contact', 'HomeController@submitContact')->name('submitContact');

        Route::get('/career', 'HomeController@getCareer')->name('career');

        Route::post('/careerSubmit', 'HomeController@submitCareer')->name('submitCareer');

        Route::get('/blogs', 'HomeController@getBlogs')->name('blogs');
        
        Route::get('/blogs/{slug}', 'HomeController@getBlogsDetails')->name('blogs.details');

        Route::get('/news', 'HomeController@getNews')->name('news');
        
        Route::get('/news/{slug}', 'HomeController@getNewsDetails')->name('news.details');

        Route::get('/company/privary-policy', 'HomeController@privacyPolicy')->name('privacy.policy');

        Route::get('/company/repairs-and-warranty', 'HomeController@warranty')->name('warranty');

        // Route::get('company/warranty', 'HomeController@warranty')->name('warranty');

        Route::get('products-manuals', 'HomeController@productsManuals')->name('productsManuals');
        
        Route::get('products-manuals/sub-category', 'HomeController@subCategoryManual')->name('subCategoryManual');

        Route::get('products-manuals/sub-category/products', 'HomeController@subCategoryProductsManual')->name('subCategoryProductsManual');

        Route::get('product-manual', 'HomeController@getProductManual')->name('getProductManual');

        Route::get('/daraz','HomeController@redirectToDarazSkyworth')->name('redirectToDarazSkyworth');

    }
);
