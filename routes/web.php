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
Route::get('worker/create3','WorkerController@apply3');
Route::post('worker/create3','WorkerController@create3')->middleware('auth');
Route::get('worker/','WorkerController@index');
Route::get('admin/create','Admin\AdminController@apply');
Route::post('admin/create','Admin\AdminController@create')->middleware('auth');
Route::post('admin/update', 'Admin\AdminController@update')->middleware('auth'); 




Auth::routes();

Route::group(['middleware' => ['auth.admin']], function () {
	//管理側トップ
Route::get('admin','Admin\AdminController@index');
	//ユーザー一覧
Route::get('/admin/user_list', 'Admin\ManageUserController@showUserList');
	//ユーザー詳細
Route::get('/admin/user/{id}', 'Admin\ManageUserController@showUserDetail');
});

//管理側ログイン
Route::get('/admin/login', 'Admin\AdminLoginController@showLoginform');
Route::post('/admin/login', 'Admin\AdminLoginController@login');

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
