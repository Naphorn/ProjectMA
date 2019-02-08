@extends('layouts.sidebar')
@extends('layouts.app')
@section('content')
@auth
<div class="container">
        <canvas height="200" id="myCanvas" width="578"></canvas>
        <script>
        var canvas = document.getElementById('myCanvas');
        var context = canvas.getContext('2d');

        context.beginPath();
        context.moveTo(100, 150); // เริ่มต้น cursor (ตำแหน่งเริ่มต้นของ context)
        context.lineTo(450, 50); // ตำแหน่งปลายทาง
        context.stroke();
        </script>

</div>
@endauth
@endsection
