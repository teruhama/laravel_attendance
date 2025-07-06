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

Route::get('/index', 'TimeForBladeController@index');

Route::get('/list', 'ListForBladeController@index');

Route::get('/attendance', 'AttendanceForBladeController@index');

Route::get('/operate', 'OperateForBladeController@index');

Route::post('/operate/add', 'OperateForBladeController@add');

Route::get('/test', function () {
    return view('test');
});

Route::post('/attendance', 'AttendanceForBladeController@add');
Auth::routes();

Route::get('/home', 'HomeForBladeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeForBladeController@index')->name('home');
