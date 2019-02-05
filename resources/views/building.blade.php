@extends('layouts.app')
@section('content')
@auth
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <br/>
                <h3 align="center">เพิ่มข้อมูล</h3>
            <br/>
            <form method="post" action="{{url('building')}}"> {{csrf_field()}}
                <div class="form-group">
                    <input type="text" name="floor" class="form-control" placeholder="ป้อนจำนวนชั้น"/>
                </div>
                <div class="form-group">
                    <input type="text" name="num_room" class="form-control" placeholder="ป้อนจำนวนห้อง"/>
                </div>
                <button class="add-box">+</button>
                <div class="form-group">
                    <input type="submit" class="btn btn-primary" value="บันทึกข้อมูล"/>
                </div>
            </form>
        </div>
    </div>
</div>
@endauth
@endsection
