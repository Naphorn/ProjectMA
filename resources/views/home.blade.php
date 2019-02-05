@extends('layouts.app')
@section('content')
@auth
    <a href="building/create" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">เพิ่มข้อมูลอาคาร</a>
@endauth
@endsection
