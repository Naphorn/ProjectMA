@extends('layouts.master')

@section('css')
@endsection
@section('content')
@auth
{{-- @php var_dump($buildings);@endphp --}}
<div class="container">
    <div class="row">
        @foreach ($buildings as $value)
        <div class="col-md">
        <br>
           <div class="card">
                {{-- <img class="card-img-top" src="{{$value->cover_image}}" alt="Card image cap"> --}}
                <div class="card-body">
                    <h1 class="card-title">{{$value->building_name}}</h1>
                    <a href="building/{{$value->id}}" class="btn btn-primary">See more</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endauth
@endsection
