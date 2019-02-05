@extends('layouts.app')
@section('content')
@auth
<table class="table table-bordered table-striped">
        <tr>
            <th>ชั้น</th>
            <th>ห้อง</th>
            <th>อุณหภูมิคอยล์เย็น</th>
            <th>ความชื้นสัมพัทธ์</th>
            <th>อุณหภูมิห้อง</th>
            <th>แรงดันคอยล์เย็น</th>
            <th>กระแสคอยล์เย็น</th>
            <th>กระแสคอยล์ร้อน</th>
            <th>ความเร็วลม</th>
            <th>ประสิทธิภาพ</th>
            <th>สถานะ</th>
            <th>ส่วนควบคุม</th>
        </tr>
        @foreach($statusairs as $row)
        <tr>
            <td>{{$row->level_id}}</td>
            <td>{{$row->room_no}}</td>
            <td>{{$row->cool_temp}}</td>
            <td>{{$row->humidity}}</td>
            <td>{{$row->room_temp}}</td>
            <td>{{$row->volt_cool}}</td>
            <td>{{$row->current_cool}}</td>
            <td>{{$row->current_hot}}</td>
            <td>{{$row->wind_speed}}</td>
            <td>
                {{$row->performance}}
                <a href="{{action('StatusairController@performanceairs', $row['id'])}}" class="btn btn-success">Refresh</a>
            </td>
            <td>{{$row->power_status}}</td>
            <td>
                <a href="{{action('StatusairController@poweron', $row['id'])}}" class="btn btn-success">ON</a>
                <a href="{{action('StatusairController@poweroff', $row['id'])}}" class="btn btn-danger">OFF</a>
            </td>
        </tr>
        @endforeach
    </table>
@endauth
@endsection
