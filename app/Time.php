<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Time extends Model
{
    //
    public function getData()
    {
        //$hoge = Time::
        //DB::table('game')->get();
        $hoge = Time::all();
        var_dump("hoge = " . $hoge);
        $hoge = Time::where('user_id', 1)->where('del_flg', 0)->get();
        var_dump("id = 1 : ");
        var_dump($hoge);
        //return '名前：'.$this -> name.'---メール：'.$this -> email;
        return "timeeeeeeeeeeeee";
    }

    // 指定したユーザーID、年月で勤怠データを取得する。
    public function getUserAttendance($user_id, $year, $month)
    {
        //$hoge = Time::
        //DB::table('game')->get();
        $hoge = Time::all();
        var_dump("hoge = " . $hoge);
        $ret = Time::where('user_id', 1)->where('del_flg', 0)->orderBy('date')->orderBy('date_kind')->get();
        var_dump("id = 1 : ");
        var_dump($ret);

        
        //return '名前：'.$this -> name.'---メール：'.$this -> email;
        return $ret;
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
