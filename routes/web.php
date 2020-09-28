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

Route::get('/index', 'TimeController@index');

Route::get('/list', 'ListController@index');

Route::get('/attendance', 'AttendanceController@index');

Route::get('/operate', 'OperateController@index');

Route::post('/operate/add', 'OperateController@add');

Route::get('/test', function() { return view('test'); });

Route::post('/attendance', 'AttendanceController@add');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
