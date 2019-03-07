@extends('layouts.master')

@section('css')
<link rel="stylesheet" href="{{ asset('css/home.css')}}">
@endsection
@section('content')
@auth

<div class="box box-default">
    <div class="box-header with-border">
        <h3 class="box-title">Power Status</h3>

        <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
        </div>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <div class="row">
            <div class="col-md-8">
                <div class="chart-responsive">
                    <canvas id="pieChart" height="160" width="328" style="width: 328px; height: 160px;"></canvas>
                </div>
            </div>
            <div class="col-md-4">
                <ul class="chart-legend clearfix">
                    <li><i class="fa fa-circle-o text-green"></i> On</li>
                    <li><i class="fa fa-circle-o text-red"></i> Off</li>
                </ul>
            </div>
        </div>
    </div>
</div>

@endauth
@endsection
