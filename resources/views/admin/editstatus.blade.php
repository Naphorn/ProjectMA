@extends('layouts.master')
@section('content')
@auth
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <br />
                <h3 align="center">Edit Status Data</h3>
            <br />
            <form method="post" action="{{action('StatusairController@update', $id)}}">
                {{csrf_field()}}
                <div class="form-group">
                    <input type="text" name="level_id" class="form-control" value="{{$statusairs->level_id}}" placeholder="Level Name" />
                </div>
                <div class="form-group">
                    <input type="text" name="room_no" class="form-control" value="{{$statusairs->room_no}}" placeholder="Room Name" />
                </div>
                <div class="form-group">
                    <input type="text" name="cool_temp" class="form-control" value="{{$statusairs->cool_temp}}" placeholder="Cool coil temperature" />
                </div>
                <div class="form-group">
                    <input type="text" name="humidity" class="form-control" value="{{$statusairs->humidity}}" placeholder="Humidity" />
                </div>
                <div class="form-group">
                    <input type="text" name="room_temp" class="form-control" value="{{$statusairs->room_temp}}" placeholder="Room temperature" />
                </div>
                <div class="form-group">
                    <input type="text" name="volt_cool" class="form-control" value="{{$statusairs->volt_cool}}" placeholder="Cool coil voltage" />
                </div>
                <div class="form-group">
                    <input type="text" name="current_cool" class="form-control" value="{{$statusairs->current_cool}}" placeholder="Cool coil current" />
                </div>
                <div class="form-group">
                    <input type="text" name="current_hot" class="form-control" value="{{$statusairs->current_hot}}" placeholder="Hot coil current" />
                </div>
                <div class="form-group">
                    <input type="text" name="wind_speed" class="form-control" value="{{$statusairs->wind_speed}}" placeholder="Wind speed" />
                </div>
                <div class="form-group">
                    <input type="text" name="performance" class="form-control" value="{{$statusairs->performance}}" placeholder="Performance" />
                </div>
                <div class="form-group">
                    <input type="text" name="power_status" class="form-control" value="{{$statusairs->power_status}}" placeholder="Status" />
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-primary" value="Update" />
                </div>
                <input type="hidden" name="_method" value="PATCH" />
            </form>
        </div>
    </div>
</div>
@endauth
@endsection
