<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Airr Management</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/welcome1.css')}}">

        <!-- Scripts -->
        <script src="{{ asset('js/welcome1.js') }}" defer></script>

    </head>
    <body>         
            <div class="container">
            <div class="centerImg"></div>
            <div id="typewriter"></div>
            <div style="z-index:99; position:relative;">
                    @if (Route::has('login'))
                        <div>
                            @auth
                                <a id="login" href="{{ url('/home') }}" style="text-decoration: none;">หน้าหลัก</a>
                            @else
                                <a id="login" href="{{ route('login') }}"style="text-decoration: none;">ลงชื่อเข้าใช้</a>
        
                                <!-- @if (Route::has('register'))
                                    <a href="{{ route('register') }}">Register</a>
                                @endif -->
                            @endauth
                        </div>
                    @endif
                </div>
            <div class="main-content">
                    <div class="concept concept-one">
                      <div class="hover hover-1"></div>
                      <div class="hover hover-2"></div>
                      <div class="hover hover-3"></div>
                      <div class="hover hover-4"></div>
                      <div class="hover hover-5"></div>
                      <div class="hover hover-6"></div>
                      <div class="hover hover-7"></div>
                      <div class="hover hover-8"></div>
                      <div class="hover hover-9"></div>
                      <h1>Airr Management</h1>
                    </div>
            </div>
            
            </div>
            
    </body>
</html>
