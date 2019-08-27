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

Route::any('/','index\IndexController@index');
#前台
Route::prefix('/index')->group(function(){
    Route::get('about','index\IndexController@about');
    Route::get('news','index\IndexController@news');
    Route::get('shownews','index\IndexController@shownews');
    Route::any('index','index\IndexController@index');
});
