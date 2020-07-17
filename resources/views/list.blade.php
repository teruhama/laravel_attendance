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

            #tbl-bdr table,#tbl-bdr td,#tbl-bdr th {
                border-collapse: collapse;
                border:1px solid #333;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        @php
                        //return redirect('index');
                        var_dump("redirectttttttttttttttttttttttttt");
                        @endphp

                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Laravel Departure
                </div>

<br>
<div id="tbl-bdr">
<table style="border">
@foreach ($attendance as $key => $value)
    @php
    $objDateTime = new DateTime($value['date']);
    @endphp
    <tr>
        <td>
    date = {{ $value['date'] }}
        </td>
        <td>
            {{ $objDateTime->format('Y / m / d') }}
        </td>
        <td>
            {{ $objDateTime->format('H : i : s') }}
        </td>
        <td>
    date_kind = {{ $value['date_kind'] }}
        </td>
    </tr>
@endforeach
</table>
</div>

            </div>
        </div>
    </body>
</html>
