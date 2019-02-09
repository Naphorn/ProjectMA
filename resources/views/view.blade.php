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
            <canvas id="myCanvas" width="600" height="300";" position="absolute"></canvas>
            <script>
                var c=document.getElementById("myCanvas");
                var ctx=c.getContext("2d");
                ctx.beginPath();
                ctx.moveTo(20,20);
                ctx.lineTo(20,60);
                ctx.stroke();
                ctx.closePath();

                ctx.beginPath();
                ctx.moveTo(20,80);
                ctx.lineTo(60,80);
                ctx.stroke();
                ctx.closePath();

                ctx.beginPath();
                ctx.moveTo(60,100);
                ctx.lineTo(60,140);
                ctx.stroke();
                ctx.closePath();
            </script>
    </body>
</html>