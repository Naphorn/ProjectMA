@extends('layouts.master')

@section('css')
<script src="{{ asset('js/level-get-data-room.js') }}" defer></script>
@endsection
@section('content')
@auth



@include('tablelevels.level1')



@endauth
@endsection
