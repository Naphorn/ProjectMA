@extends('layouts.app')
@section('content')
@auth
<!-- Styles -->
<link rel="stylesheet" href="{{ asset('css/home.css')}}">

<div class="container">
    <a href="building/create" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">เพิ่มข้อมูลอาคาร</a>

    <table class="table table-bordered table-striped">
        <tr>
            <th>ชั้น</th>
            <th>จำนวนห้อง</th>
        </tr>

    </table>
    <p class="one">Some text.</p>
<p class="two">Some text.</p>
<p class="three">Some text.</p>
<p class="four">Some text.</p>
<p class="five">Some text.</p>
<p class="six">Some text.</p>
<p class="seven">Some text.</p>

</div>
@endauth
@endsection
