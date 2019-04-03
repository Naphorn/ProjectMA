@extends('layouts.master')

@section('css')
@endsection
@section('content')
@auth
<div class="container"><br>
{{-- ----------------------------------------Status Power-------------------------------------- --}}
<div class="row">
    <div class="col-md-5">
        <div class="box box-default">
            <div class="box-header with-border">
                <h3 class="box-title">Status Power</h3>
                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <div class="row">
                    <div class="col-md-auto">
                        <div class="chart-responsive">
                            <canvas id="myChartPower" height="213px"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <script>
                var Power = document.getElementById('myChartPower').getContext('2d');
                var myChartPower = new Chart(Power, {
                    type: 'pie',
                    data: {
                        labels: ['OFF : {{ $chartstatusoff }}','ON : {{ $chartstatuson }}',],
                        datasets: [{
                            label: '',
                            data: [{{ $chartstatusoff }}, {{ $chartstatuson }}],
                            backgroundColor: [
                                'rgba(255, 0, 0, 0.5)',
                                'rgba(0, 255, 0, 0.5)',
                            ],
                            borderColor: [
                                'rgba(255, 0, 0, 0)',
                                'rgba(0, 255, 0, 0)',
                            ],
                            borderWidth: 0
                        }]
                    },
                    options: {
                        beginAtZero: true
                    }
                });
            </script>
        </div>
    </div>
{{-- ------------------------------------------------------------------------------------------ --}}
{{-- ----------------------------------------Status Performance-------------------------------- --}}
    <div class="col-md-7">
        <div class="box box-default">
            <div class="box-header with-border">
                <h3 class="box-title">Status Performance</h3>

                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <div class="row">
                    <div class="col-md-auto">
                        <div class="chart-responsive">
                            <canvas id="myChartperformance"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <script>
                var performance = document.getElementById('myChartperformance').getContext('2d');
                var myChartperformance = new Chart(performance, {
                    type: 'bar',
                    data: {
                        labels: ['Performance 1 : {{ $chartperformance1 }}','Performance 2 : {{ $chartperformance2 }}','Performance 3 : {{ $chartperformance3 }}',
                        'Performance 4 : {{ $chartperformance4 }}','Performance 5 : {{ $chartperformance5 }}'],
                        datasets: [{
                            label: '',
                            data: [{{ $chartperformance1 }}, {{ $chartperformance2 }}, {{ $chartperformance3 }}, {{ $chartperformance4 }}, {{ $chartperformance5 }}],
                            backgroundColor: [
                                'rgba(255, 0, 0, 0.5)',
                                'rgba(255, 165, 0, 0.5)',
                                'rgba(255, 255, 0, 0.5)',
                                'rgba(173, 255, 47, 0.5)',
                                'rgba(0, 255, 0, 0.5)',
                            ],
                            borderColor: [
                                'rgba(255, 0, 0, 0)',
                                'rgba(255, 165, 0, 0)',
                                'rgba(255, 255, 0, 0)',
                                'rgba(173, 255, 47, 0)',
                                'rgba(0, 255, 0, 0)',
                            ],
                            borderWidth: 0
                        }]
                    },
                    options: {
                        legend: { display: false },
                        scales: { yAxes: [{ ticks: { beginAtZero:true } }] }
                        }
                });
            </script>
        </div>
    </div>
</div>
{{-- ------------------------------------------------------------------------------------------ --}}
<button><a href="{{ url('/getpdf') }}">View Report</a></button>
{{-- ------------------------------------------------------------------------------------------ --}}
</div>
@endauth
@endsection
