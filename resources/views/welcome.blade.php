<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
        <title>Dashboards</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css"

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100%;
                margin: 0;
                z-index: 2;
            }

            .full-height {
                height: 100%;
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
                width: 100%;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }
            .links > a:hover{
              color: orange;
            }

            .m-b-md {
              margin-top: 150px;
              margin-bottom: 80px;
            }

            .cleardiv{
              clear: both;
            }
            .main_cont_header{
              width: 100%;
              margin: 0;
              padding: 0;
              font-size: 25px;
              font-weight: 400;
              line-height: 1.0;
              color: rgba(0,0,0,0.9);
              margin-bottom: 80px;
            }

            .main_cont_header h1{
              margin-bottom: 80px;
            }
            .main_cont_header ul li{
              list-style: none;
              font-size: 32px;
              font-weight: 400;
              color: rgba(33,33,33,0.7);
              font-family: sans-serif;
              margin-top: 25px;
            }
            /*icons weclcome page*/
            .icon1::before {
              color: #3f51b5;
              content: "\f045";
              font-family: FontAwesome;
              padding-right: 20px;
            }
            .icon2::before {
              color: #4caf50;
              content: "\f055";
              font-family: FontAwesome;
              padding-right: 20px;
            }
            .icon3::before {
              color: #00bcd4;
              content: "\f06e";
              font-family: FontAwesome;
              padding-right: 20px;
            }
            .icon4::before {
              color: #9c27b0;
              content: "\f040";
              font-family: FontAwesome;
              padding-right: 20px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                        <a href="{{ url('/discover') }}">Discover</a>
                    @endif
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Dashboards
                </div>
                <div class="main_cont_header">
                  <h1><strong>Create Boards</strong>
                  <br>
                  filled with information
                </h1>
                <ul>
                  <li class="icon1">Share your own ideas with the whole world</li>
                  <li class="icon2">Add links and your notes</li>
                  <li class="icon3">Follow the boards of other people</li>
                  <li class="icon4">Create boards with different themes</li>
                </ul>
                </div>
            </div>
        </div>
    </body>
</html>
