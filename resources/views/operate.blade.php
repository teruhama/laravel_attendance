<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            .time {
                font-size: 200px;
                text-align:center;
            }
            /*
            .button {
                width: 300px;
                height: 80px;
                background-color: blue;
            }
            */
            a.button {
                height: 200px;
                font-size: 60px;
                text-align: center;
                vertical-align: middle;
                color: black;
                border: solid 1px blue;
                border-radius: 10px/10px;
                background-color: lightblue;
                text-decoration: none;
            }
            a:hover {
                background-color: blue;
                /*color:red;*/
                color: white;
            }
            .alert {
                width: 100%;
                border: 1px solid red;
                border-radius: 10px/10px;
                background-color: lightgray;
            }
        </style>
        <script language="javascript" type="text/javascript">
            function GoingToWork() {
                alert("work");
            }

            function Departure() {
                alert("departure");
            }


        </script>
    </head>
    <body>
        <form name="form" action="{{ url('/operate/add')}}" method="POST">
        {{ csrf_field() }}>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            @if ($errors->any())
            <div class="alert">
                <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
                </ul>
            </div>
            @endif
            <br>
            <div class="content">
                <div class="title m-b-md">
                    勤怠管理
                </div>
                <div>
                データ登録
                </div>
                <div id="time" class="time"></div>

                <select name="date_kind" size="1">
                <option value="0">-- 勤怠種類 --</option>
                <option value="1">出勤</option>
                <option value="2">休憩</option>
                <option value="3">退社</option>
                </select>

                <input type="text" id="year" name="year" style="width:60px;" value="{{ old('year') }}"></input>年
                <input type="text" id="month" name="month" style="width:40px;"></input>月
                <input type="text" id="day" name="day" style="width:40px;"></input>日
                <input type="text" id="hour" name="hour" style="width:40px;"></input>時
                <input type="text" id="minutes" name="minutes" style="width:40px;"></input>分
                <input type="text" id="second" name="second" style="width:40px;"></input>秒

                <br>
                <a class="button" href="javascript:form.submit()">登録</a>

                <a class="button" href="{{ url('/index') }}">メイン</a><br />
                <a class="button" href="{{ url('/list') }}">一覧</a><br />
                <a class="button" href="{{ url('/Attendance') }}">Attendance</a><br />

                <div class="links">
                    <a href="https://laravel.com/docs">Docs</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://blog.laravel.com">Blog</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div>
        </form>
    </body>
    <script type="text/javascript">
            function time(){
                var now = new Date();
                // validationに引っかかった後のredirectの場合は前回値が格納されている。
                if (document.getElementById("year").value == "") {
                    document.getElementById("year").value = now.getUTCFullYear();
                }
                document.getElementById("month").value = ('0' + (now.getUTCMonth()+1)).slice(-2);
                document.getElementById("day").value = ('0' + (now.getUTCDate())).slice(-2);
                document.getElementById("hour").value = ('0' + (now.getUTCHours())).slice(-2);
                document.getElementById("minutes").value = ('0' + (now.getUTCMinutes())).slice(-2);
                document.getElementById("second").value = ('0' + (now.getUTCSeconds())).slice(-2);
            }
            time();

            function GoingToWork() {
                //alert("workkkk");
                time = now.toLocaleTimeString();
                //alert(time);                
            }

            function Departure() {
                alert("departure");
            }


       </script>
</html>