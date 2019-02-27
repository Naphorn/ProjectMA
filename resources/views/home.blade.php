@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/home.css')}}">
@endsection
@section('content')
@auth

<div class="container">
    @extends('layouts.sidebar')

    <!-- Button trigger modal -->
    {{-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">สถานะ</button> --}}

    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalCenterTitle">สถานะ</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            {{-- ------------------------------------------------------------------ --}}
            {{-- ------------------------------------------------------------------ --}}
            <table class="table table-bordered table-striped">
                @foreach($statusairs as $row)
                <tr>
                    <th>เลขเครื่อง</th>
                    <td>{{$row->id}}</td>
                </tr>
                <tr>
                    <th>ชั้น</th>
                    <td>{{$row->level_id}}</td>
                </tr>
                <tr>
                    <th>ห้อง</th>
                    <td>{{$row->room_no}}</td>
                </tr>
                <tr>
                    <th>อุณหภูมิคอยล์เย็น</th>
                    <td>{{$row->cool_temp}}</td>
                </tr>
                <tr>
                    <th>ความชื้นสัมพัทธ์</th>
                    <td>{{$row->humidity}}</td>
                </tr>
                <tr>
                    <th>อุณหภูมิห้อง</th>
                    <td>{{$row->room_temp}}</td>
                </tr>
                <tr>
                    <th>แรงดันคอยล์เย็น</th>
                    <td>{{$row->volt_cool}}</td>
                </tr>
                <tr>
                    <th>กระแสคอยล์เย็น</th>
                    <td>{{$row->current_cool}}</td>
                </tr>
                <tr>
                    <th>กระแสคอยล์ร้อน</th>
                    <td>{{$row->current_hot}}</td>
                </tr>
                <tr>
                    <th>ความเร็วลม</th>
                    <td>{{$row->wind_speed}}</td>
                </tr>
                <tr>
                    <th>ประสิทธิภาพ</th>
                    <td>
                        {{$row->performance}}
                        <a href="{{action('StatusairController@performanceairs', $row['id'])}}" class="btn btn-success">Refresh</a>
                    </td>
                </tr>
                <tr>
                    <th>สถานะ</th>
                    <td>{{$row->power_status}}</td>
                </tr>
                <tr>
                    <th>ส่วนควบคุม</th>
                    <td>
                        <a href="{{action('StatusairController@poweron', $row['id'])}}" class="btn btn-success">ON</a>
                        <a href="{{action('StatusairController@poweroff', $row['id'])}}" class="btn btn-danger">OFF</a>
                    </td>
                </tr>
                @endforeach
            </table>
            {{-- ------------------------------------------------------------------ --}}
            {{-- ------------------------------------------------------------------ --}}
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">ปิด</button>
        </div>
        </div>
    </div>
    </div>
    {{-- ---------------------------------------------------------------------------------------------- --}}
    {{-- ---------------------------------------------------------------------------------------------- --}}
    <div class='modelo-wrapper'>
        <div style="width: 100%; padding-bottom: 56.25%; position: relative">
            <div style="position: absolute; top: 0; bottom: 0; left: 0; right: 0;">
                <iframe src="https://app.modelo.io/embedded/6jeEV8WBMf?viewport=true&autoplay=true" style="width:100%;height:100%;" frameborder="0"></iframe>
            </div>
        </div>
    </div>
</div>

@endauth
@endsection
