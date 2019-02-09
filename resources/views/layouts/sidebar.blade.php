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
            <span></span>
            <span></span>
            <span></span>
        </div>
        <ul>
            <li>Home</li>
            <li>About</li>
            <li>Contact</li>
        </ul>
    </div>
    {{-- -------------------------------------------- --}}

    <canvas id="myCanvas1"></canvas>
    <script>
        var canvas = document.getElementById('myCanvas1');
        var context = canvas.getContext('2d');
        context.beginPath();
        context.strokeStyle = "#3984dd";
        context.lineWidth = 2;
        context.moveTo(50, 50);
        context.lineTo(50, 100);
        context.stroke();
    </script>

<canvas id="myCanvas2"></canvas>
   <script>
// ----- บน --------------------
var canvas = document.getElementById('myCanvas2');
        var context = canvas.getContext('2d');
context.beginPath();
context.strokeStyle = "#FFFF00";
context.lineWidth = 2;
context.moveTo(100, 50);
context.lineTo(50, 50);
context.stroke();
</script>
</body>
</html>
