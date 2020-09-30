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
// 「メイン」画面
Route::get('/index', 'TimeController@index');
// 「一覧」画面
Route::get('/list', 'ListController@index');
// 「勤怠報告」画面
Route::get('/attendance', 'AttendanceController@index');
// 「データ管理」画面
Route::get('/operate', 'OperateController@index');
// 「データ管理」画面-データ登録処理
Route::post('/operate/add', 'OperateController@add');

Route::get('/test', function() { return view('test'); });

Route::post('/attendance', 'AttendanceController@add');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
