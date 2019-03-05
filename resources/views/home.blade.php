@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/home.css')}}">
@endsection
@section('content')
@auth

<div class="container">
    @extends('layouts.sidebar')
Home
</div>

@endauth
@endsection
