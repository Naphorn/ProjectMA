@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/home.css')}}">
@endsection
@section('content')
@auth
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <br />
            <h3 align="center">Status Data</h3>
            <br />
            <div align="center">
                <a href="{{route('register')}}" class="btn btn-success">Add</a>
                <br />
                <br />
            </div>
            <table class="table table-bordered table-striped">
                <tr>
                    <th>ID</th>
                    <th>Floor</th>
                    <th>Room</th>
                    <th>Cold coil temperature</th>
                    <th>Humidity</th>
                    <th>Room temperature</th>
                    <th>Cold coil voltage</th>
                    <th>Cold coil current</th>
                    <th>Hot coil current</th>
                    <th>Wind speed</th>
                    <th>Performance</th>
                    <th>Status</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
                @foreach($statusairs as $row)
                <tr>
                    <td>{{$row->id}}</td>
                    <td>{{$row->level_id}}</td>
                    <td>{{$row->room_no}}</td>
                    <td>{{$row->cool_temp}}</td>
                    <td>{{$row->humidity}}</td>
                    <td>{{$row->room_temp}}</td>
                    <td>{{$row->volt_cool}}</td>
                    <td>{{$row->current_cool}}</td>
                    <td>{{$row->current_hot}}</td>
                    <td>{{$row->wind_speed}}</td>
                    <td>{{$row->performance}}</td>
                    <td>{{$row->power_status}}</td>
                    <td><a href="#" class="btn btn-primary">Edit</a></td>
                    <td>
                        <form method="post" class="delete_form" action="{{action('StatusairController@destroy', $row['id'])}}">
                            {{csrf_field()}}
                            <input type="hidden" name="_method" value="DELETE" />
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>

<script>
    $(document).ready(function()
    {
        $('.delete_form').on('submit', function()
        {
            if(confirm("Do you want to delete the data?"))
            {
                return true;
            }
            else
            {
                return false;
            }
        });
    });
</script>

@endauth
@endsection
