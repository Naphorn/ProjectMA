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

        <!-- Scripts -->
        <script src="{{ asset('js/welcome.js') }}" defer></script>

    </head>
    <body>
        
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

            
            <div class="container">
            <div class="centerImg"></div>
            <div id="typewriter"></div>
            <div id="typewriter1"></div>
            </div>
            <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">
            Log In
            </button>
    </body>
</html>
