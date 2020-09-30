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
        // データ成形
/*        
        $days = date($year . "/" . $month . "/1", strtotime('last day of'));
var_dump("days === ");
var_dump($days);
var_dump("\n");
echo "\n";
        $last_day = strtotime('last day', strtotime($year . "-" . $month . "-01"));
var_dump("last_day === ");
var_dump($last_day);
echo "\n";
        $last_days = date('t', strtotime('last day', strtotime($year . "-" . $month . "-01")));
var_dump("last_days === ");
var_dump($last_days);
echo "\n";
*/
        $year_month = $year . '-' . $month;
        $last_day = date('d', strtotime('last day of ' . $year_month));

        $data = array();

        // array_searchで日付ごとにデータを取得

        // 日付、kindごとに1日あたりの配列を成形

        // array_push

        // 日付分回す

        //$attendance = "";
        var_dump("attendance = " . $attendance);

        return view('list', compact('year', 'month', 'attendance'));

    }
}
