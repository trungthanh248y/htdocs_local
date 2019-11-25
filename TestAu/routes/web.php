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


Route::get('/started','HomeController@Started')->name('started');
Route::get('/startedMonth','HomeController@StartedMonth')->name('startedMonth');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/checkCategory','CategoryController@checkCategory')->name('checkCategory');


Route::get('/sendEmail','HomeController@email')->name('sendEmail');

//Route::prefix('post')->group(function (){
//    Route::get('/index','PostController@index')->name('postIndex');
//
//    Route::get('/add','PostController@create')->name('postAdd');
//    Route::post('/add','PostController@store')->name('postAddSub');
//
//    Route::get('/edit/{id}','PostController@edit')->name('postEdit');
//    Route::post('/edit/{id}','PostController@update')->name('postEditSub');
//
//    Route::post('/delete','PostController@delete')->name('postDelete');
//});
Route::prefix('category')->group(function (){
    Route::get('/index','CategoryController@index')->name('categoryIndex');

    Route::get('/add','CategoryController@create')->name('categoryAdd');
    Route::post('/add','CategoryController@store')->name('categoryAddSub');

    Route::get('/edit/{id}','CategoryController@edit')->name('postEdit');
    Route::post('/edit/{id}','CategoryController@update')->name('categoryEditSub');

    Route::post('/delete','PostController@delete')->name('postDelete');
});


//Reset PassWord
//Route::get('password/reset/{token?}','Auth\ResetPasswordController@showResetForm');
////Route::post('password/email','Auth\ForgotPasswordController@sendResetLinkEmail');
//Route::post('password/reset','Auth\ResetPasswordController@reset');