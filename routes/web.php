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
Route::get('/login','AuthController@login')->name('login');
Route::post('/postlogin','AuthController@postlogin');
Route::get('/logout','AuthController@logout');
Route::get('/','HomeController@index');
Route::get('/daftar','HomeController@daftar');
Route::post('/daftar/create','HomeController@daftar_create');

Route::group(['middleware' => ['auth']], function() {
Route::get('/pemasukan','PemasukanController@index');
Route::post('/pemasukan/create','PemasukanController@create');
Route::get('/lpemasukan','PemasukanController@lp');
Route::get('/pengeluaran','PengeluaranController@index');
Route::post('/pengeluaran/create','PengeluaranController@create');
Route::get('/lpengeluaran','PengeluaranController@lp');
});

Route::group(['middleware' => ['auth','checkRole:1']], function() {
Route::get('/halaman-admin','AdminController@index');
});