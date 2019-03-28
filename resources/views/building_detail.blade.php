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

    {!! view($levels->imglink)!!}

    {{-- @foreach($coler as $row)
        {{$row->room_no}}
        {{$row->performance}}
    @endforeach --}}
    <script type="text/javascript">

// console.log("dfhgtdrflhkjdtfohkktmfrdlhjkio");
//         @foreach($coler as $row)
//             $('{{$row->room_no}}').addClass('room-type-{{$row->performance}}');
//             var nx = {{$row->performance}};
//             var roomxxx = {{$row->room_no}};


//             // console.log('nx');
//             // document.getElementById('IE4101').style.color = "red";
//         @endforeach
        document.getElementsById('IE4101').style.color = "red";

    </script>

</div>
@endauth
@endsection

{{-- @section('script')

@endsection --}}

{{--
<script>
    (function() {
        @foreach($coler as $row)
           if($coler->performance='2')
           {
                document.getElementById('IE4101').style.color = "red";
           }
        @endforeach })
</script> --}}
