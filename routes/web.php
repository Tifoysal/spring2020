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

Route::get('/','frontend\HomeController@home');


Route::get('/admin/login','backend\UserController@showLogin')->name('login.show');
Route::post('/admin/do-login','backend\UserController@doLogin')->name('login.do');

Route::group(['namespace'=>'backend','prefix'=>'admin','middleware'=>'auth'], function () {
    Route::get('/','DashboardController@dashboard')->name('dashboard');
    Route::get('/logout','UserController@logout')->name('logout');

    Route::get('/product','ProductController@list')->name('product');
    Route::get('/create-product','ProductController@createForm')->name('product.create.form');
    Route::post('/create-product','ProductController@create')->name('product.create');
    Route::get('/product/edit/{id}','ProductController@editForm')->name('product.edit');
    Route::put('/product/update/{id}','ProductController@update')->name('product.update');

    Route::get('/order','OrderController@list')->name('order');

    Route::get('/category','CategoryController@list')->name('category.list');
    Route::post('/category/create','CategoryController@create')->name('category.create');


    Route::get('/vision','AboutController@vision');
    Route::get('/vision','CustomerController@vision');
});

















