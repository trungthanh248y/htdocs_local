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
Route::get('/index','HomeController@index')->name('index');

Route::get('/add','HomeController@add')->name('add');
Route::post('/add','HomeController@add')->name('add');

Route::get('/edit/{id}','HomeController@edit')->name('edit');
Route::post('/edit/{id}','HomeController@edit')->name('edit');

Route::get('/xoa/{id}','HomeController@xoa')->name('delete');
Route::post('/xoa/{id}','HomeController@xoa')->name('delete');
