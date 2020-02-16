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

Route::get('/',function ()
{
    return view('master');
}
);


Route::get('/product','ProductController@list')->name('product');
Route::get('/order','OrderController@list')->name('order');
Route::get('/category','CategoryController@create')->name('category.create');
Route::get('/vision','AboutController@vision');
