@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Level 1</div>
                <div class="card-header">Level 2</div>
                <div class="card-header">Level 3</div>
                <div class="card-header">Level 4</div>
                <div class="card-header">Level 5</div>
                <div class="card-header" href='adduser' >Add User</div>

                <!-- <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div> -->
            </div>
        </div>
    </div>
</div>
<table class="table table-bordered" id="table">
        <thead>
            <tr>
            <th>ห้อง</th>
            <th>อุณหภูมิคอยล์เย็น</th>
            <th>ความชื้นสัมพัทธ์</th>
            <th>อุณหภูมิห้อง</th>
            <th>แรงดันคอยล์เย็น</th>
            <th>กระแสคอยล์เย็น</th>
            <th>กระแสคอยล์ร้อน</th>
            <th>ความเร็วลม</th>
            <th>ประสิทธิภาพ</th>
            <th>สถานะ</th>
            <th>ส่วนควบคุม</th>
            </tr>
        </thead>
    </table>
@endsection
