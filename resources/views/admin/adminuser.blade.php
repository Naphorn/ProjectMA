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
            <h3 align="center">User Data</h3>
            <br />
            <div align="center">
                <a href="{{ url('/user/create') }}" class="btn btn-success">Add</a>
                <br />
                <br />
            </div>

            @if(\Session::has('success'))
                <div class="alert alert-success">
                    <p>{{ \Session::get('success')}}</p>
                </div>
            @endif

            <table class="table table-bordered table-striped">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>E-mail</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
                @foreach($userss as $row)
                <tr>
                    <td>{{$row->id}}</td>
                    <td>{{$row->name}}</td>
                    <td>{{$row->email}}</td>
                    <td><a href="#" class="btn btn-primary">Edit</a></td>
                    <td>
                        <form method="post" class="delete_form" action="{{action('UsersController@destroy', $row['id'])}}">
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
