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
/* ------------------------------------------------------------------ */
        #line1{
            border-left: solid 0px #00ccff;
            border-top: solid 0px #00ccff;
            border-bottom: solid 0px #00ccff;
            border-right: solid 0px #00ccff;
        }
        #line2{
            border-left: solid 0px #00ccff;
            border-top: solid 0px #00ccff;
            border-bottom: solid 0px #00ccff;
            border-right: solid 0px #00ccff;
        }
        #line3{
            border-left: solid 0px #00ccff;
            border-top: solid 0px #00ccff;
            border-bottom: solid 0px #00ccff;
            border-right: solid 0px #00ccff;
        }
        #line4{
            border-left: solid 0px #00ccff;
            border-top: solid 0px #00ccff;
            border-bottom: solid 0px #00ccff;
            border-right: solid 0px #00ccff;
        }
/* ------------------------------------------------------------------ */
        #line1.active{
            border-left: solid 5px #00ccff;
            height: 50px;
        }
        #line2.active{
            border-top: solid 5px #00ccff;
            width: 50px;
        }
        #line3.active{
            border-bottom: solid 5px #00ccff;
            width: 50px;
        }
        #line4.active{
            border-right: solid 5px #00ccff;
            height: 50px;
        }
/* ------------------------------------------------------------------ */
    </style>

</head>
<body>

    <canvas id="myCanvas"></canvas>
    <script>

        var canvas = document.getElementById('myCanvas');
        var context = canvas.getContext('2d');
        // ----- ซ้าย -------------------
        context.beginPath();
        context.strokeStyle = "#3984dd";
        context.lineWidth = 2;
        context.moveTo(50, 50);
        context.lineTo(50, 100);
        context.stroke();

        // ----- ขวา -------------------
        context.beginPath();
        context.strokeStyle = "#FF0000";
        context.lineWidth = 2;
        context.moveTo(100, 50);
        context.lineTo(100, 100);
        context.stroke();

        // ----- บน --------------------
        context.beginPath();
        context.strokeStyle = "#FFFF00";
        context.lineWidth = 2;
        context.moveTo(100, 50);
        context.lineTo(50, 50);
        context.stroke();

        // ----- ล่าง -------------------
        context.beginPath();
        context.strokeStyle = "#33FF00";
        context.lineWidth = 2;
        context.moveTo(100, 100);
        context.lineTo(50, 100);
        context.stroke();

        function toggleLine1() {
            document.getElementById("line1").classList.toggle('active');
        }
        function toggleLine2() {
            document.getElementById("line2").classList.toggle('active');
        }
        function toggleLine3() {
            document.getElementById("line3").classList.toggle('active');
        }
        function toggleLine4() {
            document.getElementById("line4").classList.toggle('active');
        }

    </script>

    <table width=50% border="5" cellpadding="50" cellspacing="0">

        <th id="line1"></th>
        <th id="line2"></th>
        <th id="line3"></th>
        <th id="line4"></th>

    </table>

    <button type="button" class="toggle-btn" onclick="toggleLine1()">line1</button>
    <button type="button" class="toggle-btn" onclick="toggleLine2()">line2</button>
    <button type="button" class="toggle-btn" onclick="toggleLine3()">line3</button>
    <button type="button" class="toggle-btn" onclick="toggleLine4()">line4</button>

</body>
</html>

