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

    {!! view($levels->imglink)!!}

    @foreach($statusairs as $row)
        <script>
            var cr = document.getElementById('{{$row->room_no}}');
            if('{{$row->performance}}'==5){
                cr.style.backgroundColor = "#00FF00"
            }
            else if('{{$row->performance}}'>3 && '{{$row->performance}}'<=4){
                cr.style.backgroundColor = "#ADFF2F"
            }
            else if('{{$row->performance}}'>2 && '{{$row->performance}}'<=3){
                cr.style.backgroundColor = "#FFFF00"
            }
            else if('{{$row->performance}}'>1 && '{{$row->performance}}'<=2){
                cr.style.backgroundColor = "#FFA500"
            }
            else if('{{$row->performance}}'>=0.00 && '{{$row->performance}}'<=1.00){
                cr.style.backgroundColor = "#FF0000"
            }
        </script>
    @endforeach

</div>
@endauth
@endsection
