@extends('layouts.app')
@section('content')
@auth
    <div class="row">
        <div class="col-md-2">
            <br/>
                <h3 align="center">เพิ่มข้อมูล</h3>
            <br/>
            <form method="post" action="{{url('building')}}"> {{csrf_field()}}
                <div class="form-group">
                    <input type="text" name="id_level" class="form-control" placeholder="ป้อนจำนวนชั้น"/>
                </div>
                <div class="form-group">
                    <input type="text" name="no_room" class="form-control" placeholder="ป้อนจำนวนห้อง"/>
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-primary" value="บันทึกข้อมูล"/>
                </div>
            </form>
        </div>
    </div>
@endauth
@endsection
