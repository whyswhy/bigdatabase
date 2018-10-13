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

Route::get('/', function () {
    return view('welcome');
});
Route::get('index', '\App\Http\Controllers\IndexController@index');
Route::get('login', '\App\Http\Controllers\UserController@login');
Route::post('dologin', '\App\Http\Controllers\UserController@dologin');
Route::get('register', '\App\Http\Controllers\UserController@register');
Route::get('shop', '\App\Http\Controllers\IndexController@shop');
Route::get('list', '\App\Http\Controllers\IndexController@list');
Route::get('indetial', '\App\Http\Controllers\IndexController@indetial');
Route::get('order', '\App\Http\Controllers\UserController@order');
Route::get('self_info', '\App\Http\Controllers\UserController@self_info');
Route::get('quitlogin', '\App\Http\Controllers\UserController@quitlogin');
Route::post('addregister', '\App\Http\Controllers\UserController@addregister');
