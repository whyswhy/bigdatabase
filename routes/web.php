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
Route::get('admin/login', '\App\Http\Controllers\AdminController@login');
Route::post('admin/dologin', '\App\Http\Controllers\AdminController@dologin'); 

Route::group(['middleware' => ['CheckPower']], function () {
     Route::get('admin/index', '\App\Http\Controllers\AdminController@index');  
     Route::get('admin/pages', '\App\Http\Controllers\AdminController@pages');    
     Route::get('admin/people', '\App\Http\Controllers\AdminController@people');
     Route::post('admin/addpeople', '\App\Http\Controllers\AdminController@addpeople');
     Route::get('admin/show', '\App\Http\Controllers\AdminController@show');
     Route::get('admin/role', '\App\Http\Controllers\AdminController@role');
     Route::get('admin/roles', '\App\Http\Controllers\AdminController@roles');
     Route::post('admin/addrole', '\App\Http\Controllers\AdminController@addrole');
     Route::get('admin/menus', '\App\Http\Controllers\AdminController@menus');
     Route::post('admin/addmenus', '\App\Http\Controllers\AdminController@addmenus');
     Route::get('admin/del', '\App\Http\Controllers\AdminController@del');
     Route::get('admin/rdel', '\App\Http\Controllers\AdminController@rdel');
     Route::get('admin/showmenu', '\App\Http\Controllers\AdminController@showmenu');
     Route::post('admin/addmenus', '\App\Http\Controllers\AdminController@addmenus');
     Route::get('admin/upauth', '\App\Http\Controllers\AdminController@upauth');
     Route::post('admin/rauth', '\App\Http\Controllers\AdminController@rauth');
     Route::get('admin/buttons', '\App\Http\Controllers\AdminController@buttons');
     Route::post('admin/addbuttons', '\App\Http\Controllers\AdminController@addbuttons');
     Route::get('admin/showbuttons', '\App\Http\Controllers\AdminController@showbuttons');
     Route::get('admin/goods', '\App\Http\Controllers\AdminController@goods');
     Route::get('admin/up', '\App\Http\Controllers\AdminController@up');
});



 

