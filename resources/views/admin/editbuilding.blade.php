@extends('layouts.master')
@section('content')
@auth
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <br />
                <h3 align="center">Edit Buildings Data</h3>
            <br />

            <form method="post" action="{{action('BuildingController@update', $id)}}">
                {{csrf_field()}}
                <div class="form-group">
                    <input type="text" name="building_name" class="form-control" value="{{$builds->building_name}}" placeholder="Building Name" />
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
