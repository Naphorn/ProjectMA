@extends('layouts.master')

@section('css')
@endsection
@section('content')
@auth
<div class="container"><br>
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
                <div class="col-md-12">
                    <div class="chart-responsive">
                        <canvas id="myChart"></canvas>
                    </div>
                </div>
                {{-- <div class="col-md-4">
                    <ul class="chart-legend clearfix">
                        <li><i class="fa fa-circle-o text-green"></i> On</li>
                        <li><i class="fa fa-circle-o text-red"></i> Off</li>
                    </ul>
                </div> --}}
            </div>
        </div>
    </div>
</div>

<script>
    var ctx = document.getElementById('myChart').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'pie',
        data: {
            labels: ['OFF','ON',],
            datasets: [{
                label: '',
                data: [{{ $chartstatusoff }}, {{ $chartstatuson }}],
                backgroundColor: [
                    'rgba(255, 0, 0, 0.1)',
                    'rgba(0, 255, 0, 0.1)',
                ],
                borderColor: [
                    'rgba(255, 0, 0, 1)',
                    'rgba(0, 255, 0, 1)',
                ],
                borderWidth: 1
            }]
        },
        options: {
            // scales: { yAxes: [{ ticks: { beginAtZero: true } }] }
        }
    });
</script>

@endauth
@endsection
