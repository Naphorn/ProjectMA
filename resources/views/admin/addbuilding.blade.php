@extends('layouts.app')
@section('content')
@auth
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <br />
                <h3 align="center">Insert Buildings Data</h3>
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

            <form method="post" action="{{url('building')}}">
                {{csrf_field()}}
                <div class="form-group">
                    <input type="text" name="building_name" class="form-control" placeholder="Building Name" />
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
