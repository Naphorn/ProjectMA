@extends('layouts.master')

@section('css')
{{-- <link rel="stylesheet" href="{{ asset('css/room-color.css') }}">
<script src="{{ asset('js/room-get-color.js') }}" defer></script> --}}
<script src="{{ asset('js/level-get-data-room.js') }}" defer></script>
@endsection
@section('content')
@auth
<div class="container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('/home') }}">Home</a></li>
            <li class="breadcrumb-item"><a href="#">{{$buildings->building_name}}</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{$levels->level_name}}</li>
        </ol>
    </nav>

    <div style="background:#FF0000; width:20px; height:20px; float:left; margin:15px 0px 10px 10px;"></div>
    <div style="float:left; font-size:20px; margin:10px;">EER is very low</div>

    <div style="background:#FFA500; width:20px; height:20px; float:left; margin:15px 0px 10px 10px;"></div>
    <div style="float:left; font-size:20px; margin:10px;">EER is low</div>

    <div style="background:#FFFF00; width:20px; height:20px; float:left; margin:15px 0px 10px 10px;"></div>
    <div style="float:left; font-size:20px; margin:10px;">EER is medium</div>

    <div style="background:#ADFF2F; width:20px; height:20px; float:left; margin:15px 0px 10px 10px;"></div>
    <div style="float:left; font-size:20px; margin:10px;">EER is good</div>

    <div style="background:#00FF00; width:20px; height:20px; float:left; margin:15px 0px 10px 10px;"></div>
    <div style="float:left; font-size:20px; margin:10px;">EER is very good</div>

    {!! view($levels->imglink)!!}

    @foreach($statusairs as $row)
        <script>
            var cr = document.getElementById('{{$row->room_no}}');
            if('{{$row->performance}}'==5){
                cr.style.backgroundColor = "#00FF00"
            }
            else if('{{$row->performance}}'>=4 && '{{$row->performance}}'<=4.99){
                cr.style.backgroundColor = "#ADFF2F"
            }
            else if('{{$row->performance}}'>=3 && '{{$row->performance}}'<=3.99){
                cr.style.backgroundColor = "#FFFF00"
            }
            else if('{{$row->performance}}'>=2 && '{{$row->performance}}'<=2.99){
                cr.style.backgroundColor = "#FFA500"
            }
            else if('{{$row->performance}}'>=0.00 && '{{$row->performance}}'<=1.99){
                cr.style.backgroundColor = "#FF0000"
            }
        </script>
    @endforeach

</div>
@endauth
@endsection
