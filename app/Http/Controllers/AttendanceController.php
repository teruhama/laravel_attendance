<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use Request;
use App\Time;

class AttendanceController extends Controller
{
    //
    public function index()
    {
        $hello_array = ['Hello', 'こんにちは', 'ニーハオ'];

        // ログインしたユーザー情報を設定
        $user_id = 1;
        $user_name = "hogehoge";

        // 出勤しているか
        //$hoge = $time->getData();
        // 退勤しているか

        // 休憩中か

        // 状態　0：未出勤／1：出勤中／2：休憩中／3：退勤済
        $state = 0;

        var_dump("111");
        $time = new TIme();
        $items = "";
        //$hoge = Time::getData();
        var_dump($time);
        var_dump("222");
        //$hoge = Time::all();
        //$items = Time::all();
        //DB::table('game')->get();

        return view('attendance', compact('hello_array', 'items', 'user_id', 'user_name', 'state'));

    }

    public function add() {
        var_dump("add");
    }

    public function startWork() {
        var_dump("startWork innnn");   
    }
}
