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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::middleware('CheckAdmin')->group(function () {
    Route::get('/admin/index','AccountController@index')->name('admin.index');

    Route::get('/add','AccountController@add')->name('add');
    Route::post('/add','AccountController@addSubmit')->name('addSubmit');

    Route::get('/edit','AccountController@edit')->name('edit');
    Route::post('/edit','AccountController@editSubmit')->name('editSubmit');

    Route::post('/delete','AccountController@delete')->name('delete');




    Route::get('/select','AccountController@select');
});//->middleware('CheckAdmin')