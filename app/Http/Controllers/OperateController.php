<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use Request;
use App\Time;

class OperateController extends Controller
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
        // 退勤しているかs

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

//        return view('attendance', compact('hello_array', 'items', 'user_id', 'user_name', 'state'));

        return view('operate');
    }

    public function add(Request $request) {
        var_dump("add");

        echo '\n';
        echo '\n';
        echo '<pre>';
        var_dump("request = ");
        var_dump($request);
        var_dump('\n');
        echo '</pre>';
        echo '\n';
        echo '\n';
        var_dump("_REQUEST = ");
        var_dump($_REQUEST);
        var_dump('\n');
        echo '\n';
        echo '\n';
        var_dump("_POST = ");
        var_dump($_POST);
        var_dump('\n');
        echo '\n';
        echo '\n';
        var_dump("_GET = ");
        var_dump($_GET);

        echo '\n';
        echo '\n';
        if (isset($_REQUEST[0])) {
            var_dump("REQUEST[0] = ");
            var_dump($_REQUEST[0]);
        }
        if (isset($_GET['year'])) {
            var_dump("GET[year] = ");
            var_dump($_GET['year']);
        }
        if (isset($_POST['year'])) {
            var_dump("POST[year] = ");
            var_dump($_POST['year']);
        }
        // ユーザー情報
        // 引数で取得するかリクエストパラメーターか
        $user_id = 1;

        if (isset($_POST['year']) && isset($_POST['month']) && isset($_POST['day']) 
        && isset($_POST['hour']) && isset($_POST['minutes']) && isset($_POST['second']) ) {
/*
            $year = strval($_POST['year']);
            $month = strval($_POST['month']);
            $day = strval($_POST['day']);
            $hour = strval($_POST['hour']);
            $minutes = strval($_POST['minutes']);
            $second = strval($_POST['second']);
*/
            $year = $_POST['year'];
            $month = $_POST['month'];
            $day = $_POST['day'];
            $hour = $_POST['hour'];
            $minutes = $_POST['minutes'];
            $second = $_POST['second'];

            $date_kind = $_POST['date_kind'];

            $date = date('Y-m-d H:i:s', strtotime($year . '-' . $month . '-' . $day . ' ' . $hour . ':' . $minutes . ':' . $second));
            
            // データ登録処理
            $time = new Time();
            $ret = $time->insertAttendance($user_id, $date, $date_kind);

            if ($ret) {
                return view('operate');
            } else {
                var_dump("error");
            }
        } else {
            // エラー処理
            echo ("\n");
            var_dump("====================");
            echo ("\n");
            var_dump("errorrrrrrrrrrrrr!!!");
            echo ("\n");
            var_dump("====================");
            echo ("\n");
        }
/*        
        month = $_POST['month'];
        day = $POST['day'];
        hour = $POST['hour'];
        minutes = $POST['minutes'];
        second = $POST['second'];
        date_kind = $POST['date_kind'];

*/
    }
}
