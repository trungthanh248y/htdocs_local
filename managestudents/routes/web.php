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
Route::get('/','HomeController@index')->name('home');

Route::get('getStudentSubjects','StudentController@getSubjects');

Route::get('/getSession','HomeController@getSession')->name('Session');
Route::post('/postSeesion','HomeController@postSeesion')->name('Seesion');

Route::get('/student/add', 'StudentController@create')->name('addStudent');
Route::post('/student/add', 'StudentController@store')->name('storeStudent');

Route::get('/student/edit/{id}','StudentController@getEditStudent')->name('getEditStudent');
Route::post('/student/edit/{id}','StudentController@editStudent')->name('editStudent');

Route::post('/student/delete','StudentController@delete')->name('deleteStudent');



Route::get('/group/add','GroupController@create')->name('addGroup');
Route::post('/group/add','GroupController@store')->name('storeGroup');

Route::get('/group/eidt/{id}','GroupController@getEditGroup')->name('getEditGroup');
Route::post('/group/eidt/{id}','GroupController@EditGroup')->name('EditGroup');

Route::post('/group/delete','GroupController@deleteGroup')->name('deleteGroup');



Route::get('group/ajaxStudent','GroupController@ajax')->name('ajaxGetStudent');

Route::get('group/ajaxStudent2','GroupController@ajaxVd2')->name('ajaxGetStudentVd2');




//Route::get();
