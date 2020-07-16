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
        </style>
        <script language="javascript" type="text/javascript">
            function GoingToWork() {
                alert("work");
            }

            function Departure() {
                alert("departure");
            }

            $(".navigation").navigation({
                type: "overlay",
                gravity: "right",
                maxWidth: "10000px"
            });

            #wrapper nav {
                position: fixed;
                top: 0;
                right: -300px;
                width: 300px;
                height: 100%;
                padding-top: 50px;
                background:#333;
                font-size: 16px;
                box-sizing: border-box;
                z-index: 2
            }
            #wrapper nav ul li {
                display:block;
                padding: 20px 28px
            }
            #wrapper nav ul li a {
                text-decoration: none;
                color: #ddd
            }
            #wrapper .btn-gnavi {
                position: fixed;
                top: 20px;
                right: 20px;
                width: 30px;
                height: 24px;
                z-index: 3;
                box-sizing: border-box;
                cursor: pointer;
                -webkit-transition: all 400ms;
                transition: all 400ms
            }
            #wrapper .btn-gnavi span {
                position: absolute;
                width: 30px;
                height: 4px;
                background: #666;
                border-radius: 10px;
                -webkit-transition: all 400ms;
                transition: all 400ms
            }
            #wrapper .btn-gnavi span:nth-child(1) {
                top: 0
            }
            #wrapper .btn-gnavi span:nth-child(2) {
                top: 10px
            }
            #wrapper .btn-gnavi span:nth-child(3) {
                top: 20px
            }
            #wrapper .btn-gnavi.open span {
                background: #fff
            }
            #wrapper .btn-gnavi.open span {
                width: 24px;
            }
            #wrapper .contents section p {
                position: absolute;
                top: 50%;
                width: 30%;
                line-height: 1.4;
                font-size: 20px;
                color: #fff;
            }
            #wrapper .contents section:nth-child(odd) p {
                left: 10%
            }
            #wrapper .contents section:nth-child(even) p {
                right: 10%
            }
            $(function(){
                $(".btn-gnavi").on("click", function(){
                    // ハンバーガーメニューの位置を設定
                    var rightVal = 0;
                    if($(this).hasClass("open")) {
                        // 位置を移動させメニューを開いた状態にする
                        rightVal = -300;
                        // メニューを開いたら次回クリック時は閉じた状態になるよう設定
                        $(this).removeClass("open");
                    } else {
                        // メニューを開いたら次回クリック時は閉じた状態になるよう設定
                        $(this).addClass("open");
                    }
            
                    $("#global-navi").stop().animate({
                        right: rightVal
                    }, 200);
                });
            });
        </script>
        <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
crossorigin="anonymous">
        </script>
    </head>
    <body>
        <div id="wrapper">
            <span></span>
            <span></span>
            <span></span>
            <nav id="global-navi">
                <ul class="menu">     
                <li><a href="">トップ</a></li>
                <li><a href="">概要</a></li>
                <li><a href="">特集</a></li>
                <li><a href="">アクセス</a></li>
                <li><a href="">お問い合わせ</a></li>
               </ul>
            </nav>
        </div>        
        <div class="nav_content">
            <button type="button" class="nav_handle">Menu</button>
        </div>
        <nav class="navigation" data-navigation-handle=".nav_handle" data-navigation-content=".nav_content">
            <a href="#">One</a>
            <a href="#">Two</a>
            <a href="#">Three</a>
        </nav>
        <form action="{{ url('/add')}}" method="POST">
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

            <div class="content">
                <div class="title m-b-md">
                    勤怠管理
                </div>
                <div>
                    <p id="user">ID = {{ $user_id }}</p>
                    <p id="user">NAME = {{ $user_name }}</p>
                </div>
                <div>
                    勤怠状況　：　{{ $state }}
                </div>
                <div id="time" class="time"></div>

                <p>{{ $items }}</p>
                @section('index')
                <div>
                    @foreach ($hello_array as $hello_world)
                        {{ $hello_world }}<br>
                    @endforeach
                </div>
                @endsection

                <a class="button" href="javascript:GoingToWork();">出勤</a>
                <a class="button" href="javascript:Departure();">退勤</a><br />

                <a href="{{ url('/list') }}">list</a><br />

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
                //document.getElementById("time").innerHTML = now.toLocaleTimeString();
                //time.innerHTML = now.toLocaleTimeString();
                console.log(now.toLocaleTimeString());
                //document.time.innerHTML = now.toLocaleTimeString();
                document.getElementById("time").innerHTML = now.toLocaleTimeString();
            }
            //time();
            setInterval('time()',1000);

            function GoingToWork() {
                //alert("workkkk");
                var now = new Date();
                var time = now.toLocaleTimeString();
                
                //alert(time);                
                //var id = $('div.item').data('id');
                var id = '1';

                $.ajax({
                    headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    //url: '/attendance/startWork' + id + '/' + time,
                    //url: '/attendance/startWork/' + id,
                    url: '/attendance/startWork',
                    type: 'POST',
                    //id: id,
                    success: function(){
                        console.log('success');
                    //通信が成功した場合の処理
                    },
                    error: function(){
                    //通信が失敗した場合の処理
                        console.log('error');
                    }
                });
            }

            function Departure() {
                alert("departure");
            }


       </script>
</html>
