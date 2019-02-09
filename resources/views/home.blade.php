@extends('layouts.app')
@section('content')
@auth
<!-- Styles -->
<link rel="stylesheet" href="{{ asset('css/home.css')}}">

<div class="container">
    <a href="building/create" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">เพิ่มข้อมูลอาคาร</a>

    <table class="table table-bordered table-striped">
        <tr>
            <th>ชั้น</th>
            <th>จำนวนห้อง</th>
        </tr>

    </table>
    <canvas id="myCanvas" width="600" height="300" style="border:5px solid;" position="absolute"></canvas>
    <script>
        var c=document.getElementById("myCanvas");
        var ctx=c.getContext("2d");
        ctx.beginPath();
        ctx.moveTo(0,0);
        ctx.lineTo(200,100);
        ctx.stroke();
        ctx.closePath();
    </script>

</div>
@endauth
@endsection
