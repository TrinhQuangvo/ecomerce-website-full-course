<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/','FrontendController@getHome')->name('trang-chu');

Route::get('detail/{id}/{slug}.html','FrontendController@getDetails');

Route::get('category/{id}/{slug}.html','FrontendController@getCategory');

Route::get('search','FrontendController@getResult');

Route::group(['prefix'=>'cart'],function(){
    Route::get('add/{id}','CartController@getAddCart');
    Route::get('show','CartController@getShowCart');
    Route::get('delete/{id}','CartController@getDelete');
    Route::get('update','CartController@GetUpdateCart');
    Route::post('show','CartController@postComplete');
});

Route::resource('api/item','ItemController');

Route::group(['namespace'=>'Admin'],function(){
    Route::group(['prefix'=>'login','middleware'=>'CheckLogedIn'],function(){
        Route::get('/','LoginController@getLogin');
        Route::post('/','LoginController@postLogin');
    });

    Route::get('logout','HomeController@getLogout');

    Route::group(['prefix'=>'admin','middleware'=>'CheckLogedOut'],function(){
        Route::get('home','HomeController@getHome');

        Route::group(['prefix'=>'category'],function(){
            Route::get('/','CategoryController@getCate');
            Route::post('/','CategoryController@postCate');


            Route::get('edit/{id}','CategoryController@getEditCate');
            Route::post('edit/{id}','CategoryController@postEditCate'); 
            // this is delete one by one route
            Route::get('delete/{id}','CategoryController@getDeleteCate');
            //this is delete multiple items route
            Route::post('del','CategoryController@del');
        });
        
        Route::group(['prefix'=>'product'],function(){
            Route::get('/','ProductController@getProduct');

            Route::get('add','ProductController@getAddProduct');
            Route::post('add','ProductController@postAddProduct');  

            Route::get('edit/{id}','ProductController@getEditProduct');
            Route::post('edit/{id}','ProductController@postEditProduct'); 

            Route::get('delete/{id}','ProductController@getDeleteProduct');
        });
    });
    
});