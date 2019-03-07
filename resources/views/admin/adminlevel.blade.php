@extends('layouts.master')

@section('css')
<link rel="stylesheet" href="{{ asset('css/home.css')}}">
@endsection
@section('content')
@auth
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <br />
            <h3 align="center">Level Status Data</h3>
            <br />
            <div align="center">
                <a href="{{url('level/create')}}" class="btn btn-success">Add</a>
                <br />
                <br />
            </div>
            <table class="table table-bordered table-striped">
                <tr>
                    <th>ID</th>
                    <th>Level Name</th>
                    <th>Building Name</th>
                    <th>Link Image</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
                @foreach($levels as $row)
                <tr>
                    <td>{{$row->id}}</td>
                    <td>{{$row->level_name}}</td>
                    <td>{{$row->building_id}}</td>
                    <td>{{$row->imglink}}</td>
                    <td><a href="#" class="btn btn-primary">Edit</a></td>
                    <td>
                        <form method="post" class="delete_form" action="{{action('LevelController@destroy', $row['id'])}}">
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
