@extends('layouts.master')

@section('css')
<link rel="stylesheet" href="{{ asset('css/room-color.css') }}">
<script src="{{ asset('js/room-get-color.js') }}" defer></script>
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
                if('{{$row->performance}}'==4){
                    cr.style.backgroundColor = "green"
                }
                else if('{{$row->performance}}'==2){
                    cr.style.backgroundColor = "red"
                }
            </script>
    @endforeach


</div>
@endauth
@endsection
