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
            <h3 align="center">Building Status Data</h3>
            <br />
            <div align="center">
                <a href="{{url('buildings/create')}}" class="btn btn-success">Add</a>
                <br />
                <br />
            </div>
            <table class="table table-bordered table-striped">
                <tr>
                    <th>ID</th>
                    <th>Building Name</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
                @foreach($builds as $row)
                <tr>
                    <td>{{$row->id}}</td>
                    <td>{{$row->building_name}}</td>
                    <td>
                        <a href="{{action('BuildingController@edit', $row['id'])}}" class="btn btn-warning">Edit</a>
                    </td>
                    <td>
                        <form method="post" class="delete_form" action="{{action('BuildingController@destroy', $row['id'])}}">
                            {{csrf_field()}}
                            <input type="hidden" name="_method" value="DELETE" />
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </table>
            {{ $builds->links() }}
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
