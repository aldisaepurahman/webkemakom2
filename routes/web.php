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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/', 'KemakomController@index');
Route::get('/bem', 'KemakomController@bem');
Route::get('/dpm', 'KemakomController@dpm');
Route::get('/about', 'KemakomController@about');
Route::get('/divisi/{div}', 'KemakomController@divisi');
Route::get('/berita', 'KemakomController@berita');
Route::get('/event', 'KemakomController@event');
Route::get('/pixel', 'KemakomController@pixel');
Route::get('/youtube', 'KemakomController@youtube');
Route::get('/detail/{konteks}/{id}', 'KemakomController@detail');
