<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use Request;
use App\Time;

class ListController extends Controller
{
    //
    public function index()
    {
        // ユーザー情報取得
        //$user = ['id':"1", 'name': "aaabcd"];
        $user_id = "1";

        // 年月
        $year = "2020";
        $month = "3";

        $time = new Time();
        // Date取得
        $attendance = $time->getUserAttendance($user_id, $year, $month);
        //$attendance = "";
        var_dump("attendance = " . $attendance);

/*
        $hello = 'Hello,World!';
        $hello_array = ['Hello', 'こんにちは', 'ニーハオ'];

        var_dump("111");
        $time = new TIme();
        $items = "";
        //$hoge = Time::getData();
        var_dump("222");
        $hoge = $time->getData();
        var_dump("333");
        //$hoge = Time::all();
        //$items = Time::all();
        //DB::table('game')->get();
*/
        return view('list', compact('year', 'month', 'attendance'));

    }
}
