@extends('layouts.master')
@section('content')
@auth
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <br />
                <h3 align="center">Edit Levels Data</h3>
            <br />

            <form method="post" action="{{action('LevelController@update', $id)}}">
                {{csrf_field()}}
                <div class="form-group">
                    <input type="text" name="level_name" class="form-control" value="{{$levels->level_name}}" placeholder="Level Name" />
                </div>
                <div class="form-group">
                    <input type="text" name="building_id" class="form-control" value="{{$levels->building_id}}" placeholder="Building Name" />
                </div>
                <div class="form-group">
                    <input type="text" name="imglink" class="form-control" value="{{$levels->imglink}}" placeholder="Link Image" />
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
