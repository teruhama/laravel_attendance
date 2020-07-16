<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use Request;
use App\Time;

class TimeController extends Controller
{
    //
    public function index()
    {
        $hello = 'Hello,World!';
        $hello_array = ['Hello', 'こんにちは', 'ニーハオ'];

//DB::table('attendance')->get();

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

        return view('index', compact('hello', 'hello_array', 'items', 'hoge'));

    }
}
