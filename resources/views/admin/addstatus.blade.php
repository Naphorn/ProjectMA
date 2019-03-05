@extends('layouts.app')
@section('content')
@auth
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <br />
                <h3 align="center">Insert Status Data</h3>
            <br />

            @if(count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $errors)
                            <li>{{$errors}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            @if(\Session::has('success'))
                <div class="alert alert-success">
                    <p>{{ \Session::get('success')}}</p>
                </div>
            @endif

            <form method="post" action="{{url('status')}}">
                {{csrf_field()}}
                <div class="form-group">
                    <input type="text" name="level_id" class="form-control" placeholder="Level Name" />
                </div>
                <div class="form-group">
                    <input type="text" name="room_no" class="form-control" placeholder="Room Name" />
                </div>
                <div class="form-group">
                    <input type="text" name="cool_temp" class="form-control" placeholder="Cold coil temperature" />
                </div>
                <div class="form-group">
                    <input type="text" name="humidity" class="form-control" placeholder="Humidity" />
                </div>
                <div class="form-group">
                    <input type="text" name="room_temp" class="form-control" placeholder="Room temperature" />
                </div>
                <div class="form-group">
                    <input type="text" name="volt_cool" class="form-control" placeholder="Cold coil voltage" />
                </div>
                <div class="form-group">
                    <input type="text" name="current_cool" class="form-control" placeholder="Cold coil current" />
                </div>
                <div class="form-group">
                    <input type="text" name="current_hot" class="form-control" placeholder="Hot coil current" />
                </div>
                <div class="form-group">
                    <input type="text" name="wind_speed" class="form-control" placeholder="Wind speed" />
                </div>
                <div class="form-group">
                    <input type="text" name="performance" class="form-control" placeholder="Performance" />
                </div>
                <div class="form-group">
                    <input type="text" name="power_status" class="form-control" placeholder="Status" />
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-primary" value="submit" />
                </div>
            </form>
        </div>
    </div>
</div>
@endauth
@endsection
