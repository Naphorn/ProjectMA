@extends('layouts.app')
@section('content')
@auth

<style>
    #one {
        border: solid;
        color: #000000;
        padding: 15px;
        width: 100px;
        height: 200px;
    }
    #two {

    }
</style>

<script>
    var canvas = document.getElementById('canvas');
    var context = canvas.getContext('2d');

    context.beginPath();
    context.strokeStyle = "#3984dd";
    context.lineWidth = 10;
    context.moveTo(50, 50);
    context.lineTo(50, 200);
    context.stroke();

    context.beginPath();
    context.strokeStyle = "#dd0343";
    context.lineWidth = 10;
    context.lineCap = 'round'
    context.moveTo(100, 50);
    context.lineTo(100, 200);
    context.stroke();

</script>



        <canvas id="canvas" width="150" height="150"></canvas>


@endauth
@endsection
