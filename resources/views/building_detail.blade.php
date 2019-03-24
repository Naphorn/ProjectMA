@extends('layouts.master')

@section('css')
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

    {{-- @php var_dump($levels);@endphp --}}

    {{-- @include('{{$levels->imglink}}') --}}

    {{-- @include('tablelevels.level1') --}}
    {{-- @include("{{$levels->imglink}}") --}}

    {{$levels->imglink}}

    {{-- @include("{{$levels->imglink}}") --}}


    {{-- <base target="_blank" href="{{$levels->imglink}}"> --}}

    {{-- <script>
        var ajax = new XMLHttpRequest();
        ajax.onreadystatechange = function() {
            if (ajax.readyState == 4) {
                alert(ajax.responseText);
            }
        };
        ajax.open("GET", "tablelevels/testfile.php", true);
        ajax.send(null);
    </script> --}}


</div>
@endauth
@endsection
