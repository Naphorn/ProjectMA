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
        #line5{
            border-left: solid 0px #00ccff;
            border-top: solid 0px #00ccff;
            border-bottom: solid 0px #00ccff;
            border-right: solid 0px #00ccff;
        }
        #line6{
            border-left: solid 0px #00ccff;
            border-top: solid 0px #00ccff;
            border-bottom: solid 0px #00ccff;
            border-right: solid 0px #00ccff;
        }
        #line7{
            border-left: solid 0px #00ccff;
            border-top: solid 0px #00ccff;
            border-bottom: solid 0px #00ccff;
            border-right: solid 0px #00ccff;
        }
        #line8{
            border-left: solid 0px #00ccff;
            border-top: solid 0px #00ccff;
            border-bottom: solid 0px #00ccff;
            border-right: solid 0px #00ccff;
        }
        #line9{
            border-left: solid 0px #00ccff;
            border-top: solid 0px #00ccff;
            border-bottom: solid 0px #00ccff;
            border-right: solid 0px #00ccff;
        }
        #line10{
            border-left: solid 0px #00ccff;
            border-top: solid 0px #00ccff;
            border-bottom: solid 0px #00ccff;
            border-right: solid 0px #00ccff;
        }
        #line11{
            border-left: solid 0px #00ccff;
            border-top: solid 0px #00ccff;
            border-bottom: solid 0px #00ccff;
            border-right: solid 0px #00ccff;
        }
        #line12{
            border-left: solid 0px #00ccff;
            border-top: solid 0px #00ccff;
            border-bottom: solid 0px #00ccff;
            border-right: solid 0px #00ccff;
        }
        #line13{
            border-left: solid 0px #00ccff;
            border-top: solid 0px #00ccff;
            border-bottom: solid 0px #00ccff;
            border-right: solid 0px #00ccff;
        }
        #line14{
            border-left: solid 0px #00ccff;
            border-top: solid 0px #00ccff;
            border-bottom: solid 0px #00ccff;
            border-right: solid 0px #00ccff;
        }
        #line15{
            border-left: solid 0px #00ccff;
            border-top: solid 0px #00ccff;
            border-bottom: solid 0px #00ccff;
            border-right: solid 0px #00ccff;
        }
        #line16{
            border-left: solid 0px #00ccff;
            border-top: solid 0px #00ccff;
            border-bottom: solid 0px #00ccff;
            border-right: solid 0px #00ccff;
        }
/* ------------------------------------------------------------------ */
        #line1.active{
            border-left: solid 5px #00ccff;
        }
        #line2.active{
            border-top: solid 5px #00ccff;
        }
        #line3.active{
            border-left: solid 5px #00ccff;
            border-top: solid 5px #00ccff;
        }
        #line4.active{
            border-right: solid 5px #00ccff;
        }
        #line5.active{
            border-left: solid 5px #00ccff;
            border-right: solid 5px #00ccff;
        }
        #line6.active{
            border-top: solid 5px #00ccff;
            border-right: solid 5px #00ccff;
        }
        #line7.active{
            border-left: solid 5px #00ccff;
            border-top: solid 5px #00ccff;
            border-right: solid 5px #00ccff;
        }
        #line8.active{
            border-bottom: solid 5px #00ccff;
        }
        #line9.active{
            border-left: solid 5px #00ccff;
            border-bottom: solid 5px #00ccff;
        }
        #line10.active{
            border-top: solid 5px #00ccff;
            border-bottom: solid 5px #00ccff;
        }
        #line11.active{
            border-left: solid 5px #00ccff;
            border-top: solid 5px #00ccff;
            border-bottom: solid 5px #00ccff;
        }
        #line12.active{
            border-bottom: solid 5px #00ccff;
            border-right: solid 5px #00ccff;
        }
        #line13.active{
            border-left: solid 5px #00ccff;
            border-bottom: solid 5px #00ccff;
            border-right: solid 5px #00ccff;
        }
        #line14.active{
            border-top: solid 5px #00ccff;
            border-bottom: solid 5px #00ccff;
            border-right: solid 5px #00ccff;
        }
        #line15.active{
            border-left: solid 5px #00ccff;
            border-top: solid 5px #00ccff;
            border-bottom: solid 5px #00ccff;
            border-right: solid 5px #00ccff;
        }
/* ------------------------------------------------------------------ */
    </style>

</head>
<body>

    <script>
        function toggleLine1() {
            var a = 0;
            var b = 0;
            var c = 0;
            var d = 0;

            if ()
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
        // function toggleLine5() {
        //     document.getElementById("line4").classList.toggle('active');
        // }
        // function toggleLine6() {
        //     document.getElementById("line5").classList.toggle('active');
        // }
        // function toggleLine7() {
        //     document.getElementById("line6").classList.toggle('active');
        // }
        // function toggleLine8() {
        //     document.getElementById("line7").classList.toggle('active');
        // }
        // function toggleLine9() {
        //     document.getElementById("line8").classList.toggle('active');
        // }
        // function toggleLine10() {
        //     document.getElementById("line9").classList.toggle('active');
        // }
        // function toggleLine11() {
        //     document.getElementById("line10").classList.toggle('active');
        // }
        // function toggleLine12() {
        //     document.getElementById("line11").classList.toggle('active');
        // }
        // function toggleLine13() {
        //     document.getElementById("line12").classList.toggle('active');
        // }
        // function toggleLine14() {
        //     document.getElementById("line13").classList.toggle('active');
        // }
        // function toggleLine15() {
        //     document.getElementById("line14").classList.toggle('active');
        // }
    </script>

    <table width=25% border="5" cellpadding="50" cellspacing="0">

        <th id="line1"></th>
        <th id="line2"></th>
        <th id="line3"></th>
        <th id="line4"></th>

    </table>

    <button type="button" class="toggle-btn" onclick="toggleLine1()">1</button>
    <button type="button" class="toggle-btn" onclick="toggleLine2()">2</button>
    <button type="button" class="toggle-btn" onclick="toggleLine3()">4</button>
    <button type="button" class="toggle-btn" onclick="toggleLine4()">8</button>

</body>
</html>

