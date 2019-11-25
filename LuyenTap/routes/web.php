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
use App\Model\Student;
use App\Model\Employes;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home','EmployController@index')->name('home');

Route::get('/btAjax/{id}','EmployController@btAjax')->name('btAjax');

Route::get('/Image','ImageController@create')->name('form');
Route::post('/Image','ImageController@store')->name('form');

Route::get('/index','ImageController@index')->name('index');

// Route::get('/Eloquent',function(){
//     $data=App\Model\Employes::find(1)->students()->get()->toArray();//Hiển thị tất cả bảng students bằng id của bảng employess
//     echo "<pre>";
//     print_r($data);
//     echo "</pre>";
// });
// Route::get('/Eloquent1',function(){
//     $data=App\Model\Student::find(1)->employess()->get()->toArray();
//     echo "<pre>";
//     print_r($data);
//     echo "</pre>";
// });


Route::get('/started','startedController@index')->name('started');

Route::get('/ajax','ImageController@ajax')->name('ajax');
Route::get('/ajax2','ImageController@ajax2')->name('ajax2');
//Route::get('/js','ImageController@js')->name('js');

Route::get('/upLoadImage','ImageController@upLoadImage')->name('upLoadImage');
Route::post('/stortImage','ImageController@stortImage')->name('stortUpLoadImage');



Route::prefix('item')->group(function (){
    Route::get('index','ControllerItem@index')->name('index');
});


