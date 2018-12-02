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
            <td>{{$row->level->level_name}}</td> 
            
            
        </tr> 
        @endforeach 
    </table> 
@endauth
@endsection
