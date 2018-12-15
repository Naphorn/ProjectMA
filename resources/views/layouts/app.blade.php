<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{'Air Management'}}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{'Air Management'}}
                </a>
                @auth
                <a class="navbar-brand" href="{{ url('/home') }}">
                    {{'Home'}}
                </a>
                <a class="navbar-brand" href="{{ url('/level/1') }}">
                    {{'Level 1'}}
                </a>
                <a class="navbar-brand" href="{{ url('/level/2') }}">
                    {{'Level 2'}}
                </a>
                <a class="navbar-brand" href="{{ url('/level/3') }}">
                    {{'Level 3'}}
                </a>
                <a class="navbar-brand" href="{{ url('/level/4') }}">
                    {{'Level 4'}}
                </a>
                <a class="navbar-brand" href="{{ url('/level/5') }}">
                    {{'Level 5'}}
                </a>
                <a class="navbar-brand" href="{{ url('/adduser') }}">
                    {{'Register'}}
                </a>
                @endauth
                
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            <li class="nav-item">
                                <!-- @if (Route::has('register'))
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                @endif -->
                            </li>
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                    <div id="css_time_run">
                            <?=date("H:i:s")?>
                            </div>
                            <br />
                                
                                
                            <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
                            <script type="text/javascript">
                            $(function(){
                                
                                
                                var nowDateTime=new Date("<?=date("m/d/Y H:i:s")?>");
                                var d=nowDateTime.getTime();
                                var mkHour,mkMinute,mkSecond;
                                    setInterval(function(){
                                    d=parseInt(d)+1000;
                                    var nowDateTime=new Date(d);
                                    mkHour=new String(nowDateTime.getHours());  
                                    if(mkHour.length==1){  
                                        mkHour="0"+mkHour;  
                                    }
                                    mkMinute=new String(nowDateTime.getMinutes());  
                                    if(mkMinute.length==1){  
                                        mkMinute="0"+mkMinute;  
                                    }        
                                    mkSecond=new String(nowDateTime.getSeconds());  
                                    if(mkSecond.length==1){  
                                        mkSecond="0"+mkSecond;  
                                    }   
                                    var runDateTime=mkHour+":"+mkMinute+":"+mkSecond;        
                                    $("#css_time_run").html(runDateTime);    
                                    },1000);
                                
                                
                            });
                            </script>
                </div>
            </div>
        </nav>               
        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
