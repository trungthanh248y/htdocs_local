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

Route::get('/edit/{id}','HomeController@getUpdate')->name('updateStudent');
Route::post('/edit/{id}','HomeController@Update')->name('updateStudent');

Route::get('add','HomeController@create')->name('createSudent');
Route::post('add','HomeController@stort')->name('createStudent');

Route::get('/delete/{id}','HomeController@destroy')->name('destroyStudent');
