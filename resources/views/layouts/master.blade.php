<!DOCTYPE html>
<!-- saved from url=(0116)https://adminlte.io/themes/AdminLTE/index2.html?fbclid=IwAR3UMvlAjldTOVHwLOKTPC45YMRClv5xxUOwDWQzMp9rUVhIMjhxJA7aQLU -->
<html style="height: auto; min-height: 100%;">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Dashboard</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Bootstrap 3.3.7 -->
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
        <!-- Ionicons -->
        <link rel="stylesheet" href="{{ asset('css/ionicons.min.css') }}">
        <!-- jvectormap -->
        <link rel="stylesheet" href="{{ asset('css/jquery-jvectormap.css') }}">
        <!-- Theme style -->
        <link rel="stylesheet" href="{{ asset('css/AdminLTE.min.css') }}">
        <!-- AdminLTE Skins. Choose a skin from the css/skins
        folder instead of downloading all of them to reduce the load. -->
        <link rel="stylesheet" href="{{ asset('css/_all-skins.min.css') }}">

        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        @yield('css')
        <!-- Google Font -->
        <link rel="stylesheet" href="{{ asset('css/css.css') }}">
        <style type="text/css">
        .jqstooltip {
            position: absolute;
            left: 0px;
            top: 0px;
            visibility: hidden;
            background: rgb(0, 0, 0) transparent;
            background-color: rgba(0,0,0,0.6);
            filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000);
            -ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000)";
            color: white;
            font: 10px arial, san serif;
            text-align: left;
            white-space: nowrap;
            padding: 5px;
            border: 1px solid white;
            box-sizing: content-box;
            z-index: 10000;
        }
        .jqsfield {
            color: white;
            font: 10px arial, san serif;
            text-align: left;
        }
        </style>
    </head>

    <body class="sidebar-mini skin-black" style="height: auto; min-height: 100%;">
        <div class="wrapper" style="height: auto; min-height: 100%;">
            <header class="main-header">
                <!-- Logo -->
                <a href="{{ url('/') }}" class="logo">
                    <!-- mini logo for sidebar mini 50x50 pixels -->
                    <span class="logo-mini"><b>A</b>irr</span>
                    <!-- logo for regular state and mobile devices -->
                    <span class="logo-lg"><b>Airr</b>Management</span>
                </a>

                <!-- Header Navbar: style can be found in header.less -->
                <nav class="navbar navbar-static-top">
                    <!-- Sidebar toggle button-->
                    <a href="https://adminlte.io/themes/AdminLTE/index2.html?fbclid=IwAR3UMvlAjldTOVHwLOKTPC45YMRClv5xxUOwDWQzMp9rUVhIMjhxJA7aQLU#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                        <span class="sr-only">Toggle navigation</span>
                    </a>
                    <!-- Navbar Right Menu -->
                    <div class="navbar-custom-menu">
                        <ul class="nav navbar-nav">
                        <!-- Notifications: style can be found in dropdown.less -->
                        <li class="dropdown notifications-menu">
                            <a href="https://adminlte.io/themes/AdminLTE/index2.html?fbclid=IwAR3UMvlAjldTOVHwLOKTPC45YMRClv5xxUOwDWQzMp9rUVhIMjhxJA7aQLU#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-bell-o"></i>
                                <span class="label label-warning">10</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="header">You have 10 notifications</li>
                                <li>
                                    <!-- inner menu: contains the actual data -->
                                    <ul class="menu">
                                        <li>
                                            <a href="#"><i class="fa fa-warning text-yellow"></i>
                                                Very long description here that may not fit into the page and may cause design problems
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="footer">
                                    <a href="#">View all</a>
                                </li>
                            </ul>
                        </li>

                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            <li class="nav-item">
                                {{-- @if (Route::has('register'))
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                @endif --}}
                            </li>
                            @else
                            <li class="nav navbar-nav">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest

                    </div>
                </nav>
            </header>
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="main-sidebar">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar" style="height: auto;">
                    <!-- search form -->
                    <form action="#" method="get" class="sidebar-form">
                        <div class="input-group">
                            <input type="text" name="q" class="form-control" placeholder="Search...">
                            <span class="input-group-btn">
                                <button type="submit" name="search" id="search-btn" class="btn btn-flat">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                        </div>
                    </form>
                    <!-- /.search form -->
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class="sidebar-menu tree" data-widget="tree">
                        <li class="header">MAIN NAVIGATION</li>
                        {{-- dashboard for home --}}
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-dashboard"></i>
                                <span>Dashboard</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu">
                                <li>
                                    <a href="{{url('/home')}}"><i class="fa fa-circle-o"></i> Dashboard</a>
                                    <a href="{{url('/adminuser')}}"><i class="fa fa-circle-o"></i> Users Data</a>
                                    <a href="{{url('/adminbuilding')}}"><i class="fa fa-circle-o"></i> Buildings Data</a>
                                    <a href="{{url('/adminlevel')}}"><i class="fa fa-circle-o"></i> Levels Data</a>
                                    <a href="{{url('/adminstatus')}}"><i class="fa fa-circle-o"></i> Status Data</a>
                                </li>
                            </ul>
                        </li>

                        {{-- admin --}}
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-laptop"></i>
                                <span>Admin</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu">
                                <li>
                                    <a href="{{url('/user/create')}}"><i class="fa fa-circle-o"></i> Insert Users</a>
                                    <a href="{{url('/building/create')}}"><i class="fa fa-circle-o"></i> Insert Buildings Data</a>
                                    <a href="{{url('/level/create')}}"><i class="fa fa-circle-o"></i> Insert Levels Data</a>
                                    <a href="{{url('/status/create')}}"><i class="fa fa-circle-o"></i> Insert Status Data</a>
                                </li>
                            </ul>
                        </li>

                        {{-- building name --}}
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa fa-building"></i>
                                <span>Buildings</span>
                                <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="#"><i class="fa fa-circle-o"></i> Building 1</a></li>
                                <li><a href="#"><i class="fa fa-circle-o"></i> Building 2</a></li>
                            </ul>
                        </li>

                        {{-- level name --}}
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa fa-navicon (alias)"></i>
                                <span>Floors</span>
                                <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="{{url('/levels')}}"><i class="fa fa-circle-o"></i> Level 1</a></li>
                            </ul>
                        </li>

                        {{-- room name --}}
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa fa-book"></i>
                                <span>Rooms</span>
                                <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="#"><i class="fa fa-circle-o"></i> Room 1</a></li>
                                <li><a href="#"><i class="fa fa-circle-o"></i> Room 2</a></li>
                            </ul>
                        </li>
                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper" style="min-height: 960px;overflow-x: auto; background-color:white;">

                @yield('content')

            </div>

            <!-- Control Sidebar -->
            <aside class="control-sidebar control-sidebar-dark">
                <!-- Create the tabs -->
                <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
                <li class="active">
                    <a href="https://adminlte.io/themes/AdminLTE/index2.html?fbclid=IwAR3UMvlAjldTOVHwLOKTPC45YMRClv5xxUOwDWQzMp9rUVhIMjhxJA7aQLU#control-sidebar-theme-demo-options-tab" data-toggle="tab">
                        <i class="fa fa-wrench"></i>
                    </a>
                </li>
                <li>
                    <a href="https://adminlte.io/themes/AdminLTE/index2.html?fbclid=IwAR3UMvlAjldTOVHwLOKTPC45YMRClv5xxUOwDWQzMp9rUVhIMjhxJA7aQLU#control-sidebar-home-tab" data-toggle="tab">
                        <i class="fa fa-home"></i>
                    </a>
                </li>
                <li>
                    <a href="https://adminlte.io/themes/AdminLTE/index2.html?fbclid=IwAR3UMvlAjldTOVHwLOKTPC45YMRClv5xxUOwDWQzMp9rUVhIMjhxJA7aQLU#control-sidebar-settings-tab" data-toggle="tab">
                        <i class="fa fa-gears"></i>
                    </a>
                </li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content">
                    <!-- Home tab content -->
                    <div class="tab-pane" id="control-sidebar-home-tab"></div>
                    <div id="control-sidebar-theme-demo-options-tab" class="tab-pane active"></div>
                    <!-- /.tab-pane -->
                </div>
            </aside>
            <!-- /.control-sidebar -->
        </div>

        <!-- jQuery 3 -->
        <script async="" src="{{ asset('js/analytics.js') }}"></script>
        <script src="{{ asset('js/jquery.min.js') }}"></script>
        <!-- Bootstrap 3.3.7 -->
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
        <!-- FastClick -->
        <script src="{{ asset('js/fastclick.js') }}"></script>
        <!-- AdminLTE App -->
        <script src="{{ asset('js/adminlte.min.js') }}"></script>
        <!-- Sparkline -->
        <script src="{{ asset('js/jquery.sparkline.min.js') }}"></script>
        <!-- jvectormap  -->
        <script src="{{ asset('js/jquery-jvectormap-1.2.2.min.js') }}"></script>
        <script src="{{ asset('js/jquery-jvectormap-world-mill-en.js') }}"></script>
        <!-- SlimScroll -->
        <script src="{{ asset('js/jquery.slimscroll.min.js') }}"></script>
        <!-- ChartJS -->
        <script src="{{ asset('js/Chart.js') }}"></script>

        <div class="jvectormap-label"></div>
    </body>
</html>
