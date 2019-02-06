@extends('layouts.app')
@section('content')
@auth
<div class="container">
    <a href="building/create" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">เพิ่มข้อมูลอาคาร</a>

    <table class="table table-bordered table-striped">
        <tr>
            <th>ชั้น</th>
            <th>จำนวนห้อง</th>
        </tr>

    </table>

</div>
@endauth
@endsection
