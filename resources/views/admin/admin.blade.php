@extends('layouts.master')

@section('css')
<link rel="stylesheet" href="{{ asset('css/home.css')}}">
@endsection
@section('content')
@auth
<div class="container">
    <a class="btn btn-primary" href="{{ url('/user/create') }}" role="button">Insert Users</a>
    <a class="btn btn-secondary" href="{{ url('/status/create') }}" role="button">Insert Status Data</a>
    <a class="btn btn-success" href="{{ url('/level/create') }}" role="button">Insert Levels Data</a>
    <a class="btn btn-danger" href="{{ url('/building/create') }}" role="button">Insert Buildings Data</a>
    <br />
    <br />
    <br />
    <a class="btn btn-primary" href="{{ url('/adminuser') }}" role="button">Users Data</a>
    <a class="btn btn-secondary" href="{{ url('/adminstatus') }}" role="button">Status Data</a>
    <a class="btn btn-success" href="{{ url('/adminlevel') }}" role="button">Levels Data</a>
    <a class="btn btn-danger" href="{{ url('/adminbuilding') }}" role="button">Buildings Data</a>
<div>
@endauth
@endsection
