<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Time extends Model
{
    //
    public function getData()
    {
        //$hoge = Time::
        //DB::table('game')->get();
        $hoge = Time::all();
        //var_dump("hoge = " . $hoge);
        $hoge = Time::where('user_id', 1)->where('del_flg', 0)->get();
        //var_dump("id = 1 : ");
        //var_dump($hoge);
        //return '名前：'.$this -> name.'---メール：'.$this -> email;
        return "timeeeeeeeeeeeee";
    }

    /*
     * 指定したユーザーID、年月で勤怠データを取得する。
     * @param
     * @param
     * @param
     * 
    */
    public function getUserAttendance($user_id, $year, $month)
    {
        $data = Time::select(DB::raw('DATE_FORMAT(date, "%d") AS day'), 'date', 'date_kind')
                    ->where('user_id', $user_id)
                    ->where('del_flg', 0)
                    ->whereYear('date', '=', $year)
                    ->whereMonth('date', '=', $month)
                    ->orderBy('date')
                    ->orderBy('date_kind')
                    ->get();

        return $data;
    }

    // データを追加
    public function insertAttendance($user_id, $date, $date_kind)
    {
        $time = new Time();
        $time->user_id = $user_id;
        $time->date = $date;
        $time->input_user_id = $user_id;
        $time->date_kind = $date_kind;
        $ret = $time->save();

        return $ret;
    }

}
