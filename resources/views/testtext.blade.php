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
        .line0 {
            border-left: solid 0px #00ccff;
            border-top: solid 0px #00ccff;
            border-bottom: solid 0px #00ccff;
            border-right: solid 0px #00ccff;
        }
    /* ------------------------------------------------------------------ */
        .line1 {
            border-left: solid 5px #00ccff;
            height: 100px;
            width: 100px;
        }
        .line2 {
            border-top: solid 5px #00ccff;
            height: 100px;
            width: 100px;
        }
        .line3 {
            border-left: solid 5px #00ccff;
            border-top: solid 5px #00ccff;
            height: 100px;
            width: 100px;
        }
        .line4 {
            border-right: solid 5px #00ccff;
            height: 100px;
            width: 100px;
        }
        .line5 {
            border-left: solid 5px #00ccff;
            border-right: solid 5px #00ccff;
            height: 100px;
            width: 100px;
        }
        .line6 {
            border-top: solid 5px #00ccff;
            border-right: solid 5px #00ccff;
            height: 100px;
            width: 100px;
        }
        .line7 {
            border-left: solid 5px #00ccff;
            border-top: solid 5px #00ccff;
            border-right: solid 5px #00ccff;
            height: 100px;
            width: 100px;
        }
        .line8 {
            border-bottom: solid 5px #00ccff;
            height: 100px;
            width: 100px;
        }
        .line9 {
            border-left: solid 5px #00ccff;
            border-bottom: solid 5px #00ccff;
            height: 100px;
            width: 100px;
        }
        .line10 {
            border-top: solid 5px #00ccff;
            border-bottom: solid 5px #00ccff;
            height: 100px;
            width: 100px;
        }
        .line11 {
            border-left: solid 5px #00ccff;
            border-top: solid 5px #00ccff;
            border-bottom: solid 5px #00ccff;
            height: 100px;
            width: 100px;
        }
        .line12 {
            border-bottom: solid 5px #00ccff;
            border-right: solid 5px #00ccff;
            height: 100px;
            width: 100px;
        }
        .line13 {
            border-left: solid 5px #00ccff;
            border-bottom: solid 5px #00ccff;
            border-right: solid 5px #00ccff;
            height: 100px;
            width: 100px;
        }
        .line14 {
            border-top: solid 5px #00ccff;
            border-bottom: solid 5px #00ccff;
            border-right: solid 5px #00ccff;
            height: 100px;
            width: 100px;
        }
        .line15 {
            border-left: solid 5px #00ccff;
            border-top: solid 5px #00ccff;
            border-bottom: solid 5px #00ccff;
            border-right: solid 5px #00ccff;
            height: 100px;
            width: 100px;
        }
    /* ------------------------------------------------------------------ */
    </style>

</head>
<body>


    <button onclick="mySw1()">1</button>
    <button onclick="mySw2()">2</button>
    <button onclick="mySw3()">4</button>
    <button onclick="mySw4()">8</button>

    <div id="myDIV"></div>

    <script>
        var a = 0;
        var b = 0;
        var c = 0;
        var d = 0;

        function mySw1() {
            var element = document.getElementById("myDIV");
            element.classList.toggle("line1");
        }
        function mySw2() {
            var element = document.getElementById("myDIV");
            element.classList.toggle("line2");
        }
        function mySw3() {
            var element = document.getElementById("myDIV");
            element.classList.toggle("line4");
        }
        function mySw4() {
            var element = document.getElementById("myDIV");
            element.classList.toggle("line8");
        }

    </script>



</body>
</html>

