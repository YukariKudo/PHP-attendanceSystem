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
Route::get('worker/create','WorkerController@apply');
Route::post('worker/create','WorkerController@create')->middleware('auth');
Route::get('worker','WorkerController@index')->middleware('auth');
Route::get('worker/create2','WorkerController@apply2');
Route::post('worker/create2','WorkerController@create2')->middleware('auth');
Route::get('worker/create3','WorkerController@apply3');
Route::post('worker/create3','WorkerController@create3')->middleware('auth');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
