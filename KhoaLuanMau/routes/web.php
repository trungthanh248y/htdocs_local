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

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/search','PostUserController@search')->name('search');
Route::get('/SearchDetails','PostUserController@SearchDetails')->name('SearchDetails');


Route::get('/','PostUserController@welcome')->name('welcome');
Route::get('/welcomePost','PostUserController@welcomePost')->name('welcomePost');

Route::get('/postuser/{id}','PostUserController@postUser')->name('postUser');
Route::get('/chatUser','PostUserController@chatUser')->name('chatUser');
Route::get('/order/{id}','PostUserController@order')->name('order');
Route::post('/orderPost/{id}','PostUserController@orderPost')->name('orderPost');

Route::get('/ajax','PostUserController@ajax')->name('ajax');

Route::post('/commnet/{id}','PostUserController@commnet')->name('commnet');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home')->middleware('CheckUser');

Route::middleware('CheckAccount')->group(function () {
    Route::prefix('admin')->group(function () {
        Route::get('/addGetPost', 'ControllerPosts@addGetPost')->name('addPost');
        Route::post('/addPost', 'ControllerPosts@addPost')->name('addpPost');

        Route::get('/selectPost', 'ControllerPosts@selectPost')->name('selectPost');

        Route::get('/getEdittPost/{id}', 'ControllerPosts@getEdittPost')->name('getEdittPost');
        Route::post('/editPost/{id}', 'ControllerPosts@edittPost')->name('editPost');

        Route::post('/deletePost', 'ControllerPosts@deletePost')->name('deletePost');
    });
    Route::prefix('events')->group(function (){
        Route::get('/addGetEvent', 'EventController@addGetEvent')->name('addEvent');
        Route::post('/addEvent', 'EventController@addEvent')->name('addpEvent');

        Route::get('/getEdittEvent/{id}', 'EventController@getEdittEvent')->name('getEdittEvent');
        Route::post('/editEvent/{id}', 'EventController@edittEvent')->name('editEvent');

        Route::post('/deleteEvent', 'EventController@deleteEvent')->name('deleteEvent');

        Route::post('/checkEvent', 'EventController@checkEvent')->name('checkEvent');
    });
    Route::prefix('PostRoom')->group(function (){
        Route::get('index','PostRoomController@index')->name('indexPostRomm');

        Route::get('/edit/{id}', 'PostRoomController@edit')->name('editPostRoom');
        Route::post('/edit/{id}', 'PostRoomController@editSubmit')->name('editPostRoomSubmit');

        Route::post('/delete', 'PostRoomController@delete')->name('deletePostRoom');


        Route::get('/chatAdmin', 'PostRoomController@chatAdmin')->name('chatAdmin');
    });
    Route::prefix('Meeting')->group(function (){
        Route::get('/index', 'MeetingController@index')->name('indexMeeting');

        Route::get('/edit/{id}', 'MeetingController@edit')->name('editMeeting');
        Route::post('/edit/{id}', 'MeetingController@editSubmit')->name('editPostMeetingSubmit');

        Route::post('/delete', 'MeetingController@delete')->name('deletePostMeeting');
    });
    Route::prefix('Statistic')->group(function (){
       Route::get('/','statisticController@post')->name('statisticPost');
       Route::get('/chart','statisticController@chart')->name('chart');
    });

    Route::prefix('items')->group(function (){
        Route::get('/','itemController@index')->name('itemIndex');

        Route::get('/add','itemController@add')->name('addItem');
        Route::post('/add','itemController@addSub')->name('addItemSub');

        Route::get('/edit/{id}','itemController@edit')->name('editItem');
        Route::post('/edit/{id}','itemController@editSub')->name('editItemSub');

        Route::post('/delete','itemController@delete')->name('deleteItem');
    });
});
Route::middleware('CheckHost')->group(function () {
    Route::prefix('room')->group(function () {
        Route::get('/selectRoom', 'RoomsController@selectRoom')->name('selectRoom');

        Route::get('/addRoom', 'RoomsController@addRoom')->name('addRoom');
        Route::post('/addRoom', 'RoomsController@addRoomSubmit')->name('addRoomSubmit');

        Route::get('/editRoom/{id}', 'RoomsController@editRoom')->name('editRoom');
        Route::post('/editRoom/{id}', 'RoomsController@editRoomSubmit')->name('editRoomSubmit');

        Route::post('/deleteRoom', 'RoomsController@deleteRoom')->name('deleteRoom');
    });
});

