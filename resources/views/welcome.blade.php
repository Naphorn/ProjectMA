<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Air Management</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/welcome.css')}}">
    </head>
    <body>
        <div class="stars"></div>
        <div class="twinkling"></div>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">หน้าหลัก</a>
                    @else
                        <a href="{{ route('login') }}">ลงชื่อเข้าใช้</a>

                        <!-- @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif -->
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Airr Management
                </div>
                <div class="title m-b-md">
                    ระบบริหารจัดการเครื่องปรับอากาศ
                </div>
            </div>
        </div>
    </body>
</html>
