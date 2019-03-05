<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <style>
        html, body {
            margin: 0px;
            padding: 0px;
            font-family: sans-serif;
        }
        #sidebar {
            position: fixed;
            width: 200px;
            height: 100%;
            background: #151719;
            left: -200px;
            transition: all 500ms linear;
        }
        #sidebar.active {
            left: 0px;
        }
        #sidebar ul li {
            color: rgba(230, 230, 230, 0.9);
            list-style: none;
            padding: 15px 10px;
            border-bottom: 1px solid rgba(100, 100, 100, 0.3);
        }
        #sidebar .toggle-btn {
            position: absolute;
            left: 230px;
            top: 20px;
        }
        #sidebar .toggle-btn span {
            display: block;
            width: 30px;
            height: 5px;
            background: #151719;
            margin: 5px 0px;
        }
    </style>

    <script>
        function toggleSidebar() {
            document.getElementById("sidebar").classList.toggle('active');
        }
    </script>

</head>
<body>

    {{-- sidebar-------------------------------------- --}}
    <div id="sidebar">
        <div class="toggle-btn" onclick="toggleSidebar()">
            <br><br>
            <span></span>
            <span></span>
            <span></span>
        </div>
            <br><br>
            <!-- Links -->
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="{{ url('/home') }}">หน้าหลัก</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/level1') }}">ชั้น 1</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/level/2') }}">ชั้น 2</a>
                </li>
            </ul>
    </div>
    {{-- -------------------------------------------- --}}

</body>
</html>
