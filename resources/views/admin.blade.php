@extends('layouts.master')

@section('css')
@endsection
@section('content')
@auth
    <div class="container"><br>
        <div align="center">
            <a class="btn btn-primary" style="width:50%; font-size:20px;" href="{{ url('/adminuser') }}">User Data</a>
        </div>
        <br>
        <div align="center">
            <a class="btn btn-primary" style="width:50%; font-size:20px;" href="{{ url('/adminbuilding') }}">Buildings Data</a></button>
        </div>
        <br>
        <div align="center">
            <a class="btn btn-primary" style="width:50%; font-size:20px;" href="{{ url('/adminlevel') }}">Levels Data</a></button>
        </div>
        <br>
        <div align="center">
            <a class="btn btn-primary" style="width:50%; font-size:20px;" href="{{ url('/adminstatus') }}">Status Data</a></button>
        </div>
    </div>
@endauth
@endsection
