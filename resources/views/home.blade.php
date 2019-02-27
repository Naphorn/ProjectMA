@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/home.css')}}">
<link rel="stylesheet" href="{{ asset('css/level4map.css')}}">
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
{{--
    <script type="text/javascript">
        function Upload() {
            var fileUpload = document.getElementById("fileUpload");
            var regex = /^([a-zA-Z0-9\s_\\.\-:])+(.csv|.txt)$/;
            if (regex.test(fileUpload.value.toLowerCase())) {
            if (typeof (FileReader) != "undefined") {
                var reader = new FileReader();
                reader.onload = function (e) {
                    var table = document.createElement("table");
                    var rows = e.target.result.split("\n");
                    for (var i = 0; i < rows.length; i++) {
                        var cells = rows[i].split(",");
                        if (cells.length > 1) {
                            var row = table.insertRow(-1);
                            for (var j = 0; j < cells.length; j++) {
                                var cell = row.insertCell(-1);
                                cell.innerHTML = cells[j];
                            }
                        }
                    }
                    var dvCSV = document.getElementById("dvCSV");
                    dvCSV.innerHTML = "";
                    dvCSV.appendChild(table);
                }
                reader.readAsText(fileUpload.files[0]);
            } else {
                alert("This browser does not support HTML5.");
            }
            } else {
                alert("Please upload a valid CSV file.");
            }
        }
    </script>

    <input type="file" id="fileUpload" />
    <input type="button" id="upload" value="Upload" onclick="Upload()" />
    <hr />
    <div id="dvCSV"></div> --}}

    {{-- ---------------------------------------------------------------------------------------------- --}}
    {{-- ---------------------------------------------------------------------------------------------- --}}

    {{-- <style>
    /* ------------------------------------------------------------------ */
        .line0 {
            border-left: solid 0px #00ccff;
            border-top: solid 0px #00ccff;
            border-bottom: solid 0px #00ccff;
            border-right: solid 0px #00ccff;
        }
    /* ------------------------------------------------------------------ */
        .line1 {
            border-left: solid 5px #00ccff;
            height: 100px;
            width: 100px;
        }
        .line2 {
            border-top: solid 5px #00ccff;
            height: 100px;
            width: 100px;
        }
        .line3 {
            border-left: solid 5px #00ccff;
            border-top: solid 5px #00ccff;
            height: 100px;
            width: 100px;
        }
        .line4 {
            border-right: solid 5px #00ccff;
            height: 100px;
            width: 100px;
        }
        .line5 {
            border-left: solid 5px #00ccff;
            border-right: solid 5px #00ccff;
            height: 100px;
            width: 100px;
        }
        .line6 {
            border-top: solid 5px #00ccff;
            border-right: solid 5px #00ccff;
            height: 100px;
            width: 100px;
        }
        .line7 {
            border-left: solid 5px #00ccff;
            border-top: solid 5px #00ccff;
            border-right: solid 5px #00ccff;
            height: 100px;
            width: 100px;
        }
        .line8 {
            border-bottom: solid 5px #00ccff;
            height: 100px;
            width: 100px;
        }
        .line9 {
            border-left: solid 5px #00ccff;
            border-bottom: solid 5px #00ccff;
            height: 100px;
            width: 100px;
        }
        .line10 {
            border-top: solid 5px #00ccff;
            border-bottom: solid 5px #00ccff;
            height: 100px;
            width: 100px;
        }
        .line11 {
            border-left: solid 5px #00ccff;
            border-top: solid 5px #00ccff;
            border-bottom: solid 5px #00ccff;
            height: 100px;
            width: 100px;
        }
        .line12 {
            border-bottom: solid 5px #00ccff;
            border-right: solid 5px #00ccff;
            height: 100px;
            width: 100px;
        }
        .line13 {
            border-left: solid 5px #00ccff;
            border-bottom: solid 5px #00ccff;
            border-right: solid 5px #00ccff;
            height: 100px;
            width: 100px;
        }
        .line14 {
            border-top: solid 5px #00ccff;
            border-bottom: solid 5px #00ccff;
            border-right: solid 5px #00ccff;
            height: 100px;
            width: 100px;
        }
        .line15 {
            border-left: solid 5px #00ccff;
            border-top: solid 5px #00ccff;
            border-bottom: solid 5px #00ccff;
            border-right: solid 5px #00ccff;
            height: 100px;
            width: 100px;
        }
    /* ------------------------------------------------------------------ */
    </style>
    <div id="myDIV"></div>

    <button onclick="mySw1()">1</button>
    <button onclick="mySw2()">2</button>
    <button onclick="mySw3()">4</button>
    <button onclick="mySw4()">8</button>



    <script>
        function mySw1() {
            var element = document.getElementById("myDIV");
            element.classList.toggle("line1");
        }
        function mySw2() {
            var element = document.getElementById("myDIV");
            element.classList.toggle("line2");
        }
        function mySw3() {
            var element = document.getElementById("myDIV");
            element.classList.toggle("line4");
        }
        function mySw4() {
            var element = document.getElementById("myDIV");
            element.classList.toggle("line8");
        }
    </script> --}}

    {{-- ---------------------------------------------------------------------------------------------- --}}
    {{-- ---------------------------------------------------------------------------------------------- --}}
    <table border=0 cellpadding=0 cellspacing=0 width=1113 style='border-collapse:collapse;table-layout:fixed;width:840pt'>
        <col class=xl65 width=53 span=21 style='mso-width-source:userset;mso-width-alt:1696;width:40pt'>
        <tr height=19 style='height:14.25pt'>
            <td height=19 class=xl65 width=53 style='height:14.25pt;width:40pt'></td>
            <td class=xl65 width=53 style='width:40pt'></td>
            <td class=xl65 width=53 style='width:40pt'></td>
            <td class=xl65 width=53 style='width:40pt'></td>
            <td class=xl65 width=53 style='width:40pt'></td>
            <td class=xl65 width=53 style='width:40pt'></td>
            <td class=xl65 width=53 style='width:40pt'></td>
            <td class=xl65 width=53 style='width:40pt'></td>
            <td class=xl65 width=53 style='width:40pt'></td>
            <td class=xl65 width=53 style='width:40pt'></td>
            <td colspan=2 rowspan=6 class=xl67 width=106 style='width:80pt' data-toggle="modal" data-target="#exampleModalCenter">IE3415</td>
            <td class=xl65 width=53 style='width:40pt'></td>
            <td class=xl65 width=53 style='width:40pt'></td>
            <td class=xl65 width=53 style='width:40pt'></td>
            <td class=xl65 width=53 style='width:40pt'></td>
            <td class=xl65 width=53 style='width:40pt'></td>
            <td class=xl65 width=53 style='width:40pt'></td>
            <td class=xl65 width=53 style='width:40pt'></td>
            <td class=xl65 width=53 style='width:40pt'></td>
            <td class=xl65 width=53 style='width:40pt'></td>
        </tr>
        <tr height=19 style='height:14.25pt'>
            <td height=19 class=xl65 style='height:14.25pt'></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
        </tr>
        <tr height=19 style='height:14.25pt'>
            <td height=19 class=xl65 style='height:14.25pt'></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
        </tr>
        <tr height=19 style='height:14.25pt'>
            <td height=19 class=xl65 style='height:14.25pt'></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
        </tr>
        <tr height=19 style='height:14.25pt'>
            <td height=19 class=xl65 style='height:14.25pt'></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
        </tr>
        <tr height=19 style='height:14.25pt'>
            <td height=19 class=xl65 style='height:14.25pt'></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
        </tr>
        <tr height=19 style='height:14.25pt'>
            <td height=19 class=xl65 style='height:14.25pt'></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td rowspan=2 class=xl68 data-toggle="modal" data-target="#exampleModalCenter">IE3414</td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
        </tr>
        <tr height=19 style='height:14.25pt'>
            <td height=19 class=xl65 style='height:14.25pt'></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
        </tr>
        <tr height=19 style='height:14.25pt'>
            <td height=19 class=xl65 style='height:14.25pt'></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td rowspan=4 class=xl67 style='border-top:none' data-toggle="modal" data-target="#exampleModalCenter">IE3413</td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
        </tr>
        <tr height=19 style='height:14.25pt'>
            <td height=19 class=xl65 style='height:14.25pt'></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
        </tr>
        <tr height=19 style='height:14.25pt'>
            <td height=19 class=xl65 style='height:14.25pt'></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
        </tr>
        <tr height=19 style='height:14.25pt'>
            <td height=19 class=xl65 style='height:14.25pt'></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
        </tr>
        <tr height=19 style='height:14.25pt'>
            <td height=19 class=xl65 style='height:14.25pt'></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td rowspan=2 class=xl67 style='border-top:none' data-toggle="modal" data-target="#exampleModalCenter">IE3412</td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
        </tr>
        <tr height=19 style='height:14.25pt'>
            <td height=19 class=xl65 style='height:14.25pt'></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
        </tr>
        <tr height=19 style='height:14.25pt'>
            <td height=19 class=xl65 style='height:14.25pt'></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td rowspan=3 class=xl67 style='border-top:none' data-toggle="modal" data-target="#exampleModalCenter">IE3411</td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
        </tr>
        <tr height=19 style='height:14.25pt'>
            <td height=19 class=xl65 style='height:14.25pt'></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
        </tr>
        <tr height=19 style='height:14.25pt'>
            <td height=19 class=xl65 style='height:14.25pt'></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
        </tr>
        <tr height=19 style='height:14.25pt'>
            <td height=19 class=xl65 style='height:14.25pt'></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td rowspan=2 class=xl67 style='border-top:none' data-toggle="modal" data-target="#exampleModalCenter">IE3410</td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
        </tr>
        <tr height=19 style='height:14.25pt'>
            <td height=19 class=xl65 style='height:14.25pt'></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
        </tr>
        <tr height=19 style='height:14.25pt'>
            <td height=19 class=xl65 style='height:14.25pt'></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td rowspan=3 class=xl67 style='border-top:none' data-toggle="modal" data-target="#exampleModalCenter">IE3409</td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
        </tr>
        <tr height=19 style='height:14.25pt'>
            <td height=19 class=xl65 style='height:14.25pt'></td>
            <td class=xl66></td>
            <td class=xl65></td>
            <td class=xl66></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
        </tr>
        <tr height=19 style='height:14.25pt'>
            <td height=19 class=xl66 style='height:14.25pt'></td>
            <td class=xl66></td>
            <td class=xl66></td>
            <td class=xl66></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
        </tr>
        <tr height=19 style='height:14.25pt'>
            <td colspan=2 rowspan=8 height=152 class=xl67 style='height:114.0pt' data-toggle="modal" data-target="#exampleModalCenter">IE3402</td>
            <td colspan=2 rowspan=4 class=xl71 style='border-right:.5pt solid black;border-bottom:.5pt solid black' data-toggle="modal" data-target="#exampleModalCenter">IE3403</td>
            <td colspan=3 rowspan=4 class=xl67 data-toggle="modal" data-target="#exampleModalCenter">IE3404</td>
            <td colspan=3 rowspan=4 class=xl67 data-toggle="modal" data-target="#exampleModalCenter">IE3405</td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
        </tr>
        <tr height=19 style='height:14.25pt'>
            <td height=19 class=xl65 style='height:14.25pt'></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
        </tr>
        <tr height=19 style='height:14.25pt'>
            <td height=19 class=xl65 style='height:14.25pt'></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
        </tr>
        <tr height=19 style='height:14.25pt'>
            <td height=19 class=xl65 style='height:14.25pt'></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
        </tr>
        <tr height=19 style='height:14.25pt'>
            <td height=19 class=xl65 style='height:14.25pt'></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
        </tr>
        <tr height=19 style='height:14.25pt'>
            <td height=19 class=xl65 style='height:14.25pt'></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
        </tr>
        <tr height=19 style='height:14.25pt'>
            <td height=19 class=xl65 style='height:14.25pt'></td>
            <td colspan=4 rowspan=5 class=xl67 data-toggle="modal" data-target="#exampleModalCenter">IE3406</td>
            <td rowspan=5 class=xl67 data-toggle="modal" data-target="#exampleModalCenter">IE3407</td>
            <td rowspan=5 class=xl67 data-toggle="modal" data-target="#exampleModalCenter">IE3408</td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
        </tr>
        <tr height=19 style='height:14.25pt'>
            <td height=19 class=xl65 style='height:14.25pt'></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
        </tr>
        <tr height=19 style='height:14.25pt'>
            <td colspan=2 rowspan=8 height=152 class=xl67 style='height:114.0pt'>IE3401</td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
        </tr>
        <tr height=19 style='height:14.25pt'>
            <td height=19 class=xl65 style='height:14.25pt'></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
        </tr>
        <tr height=19 style='height:14.25pt'>
            <td height=19 class=xl65 style='height:14.25pt'></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
        </tr>
        <tr height=19 style='height:14.25pt'>
            <td height=19 class=xl65 style='height:14.25pt'></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
        </tr>
        <tr height=19 style='height:14.25pt'>
            <td height=19 class=xl65 style='height:14.25pt'></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
        </tr>
        <tr height=19 style='height:14.25pt'>
            <td height=19 class=xl65 style='height:14.25pt'></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
        </tr>
        <tr height=19 style='height:14.25pt'>
            <td height=19 class=xl65 style='height:14.25pt'></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
        </tr>
        <tr height=19 style='height:14.25pt'>
            <td height=19 class=xl65 style='height:14.25pt'></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
        </tr>
        <tr height=19 style='height:14.25pt'>
            <td height=19 class=xl65 style='height:14.25pt'></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
        </tr>
        <tr height=19 style='height:14.25pt'>
            <td height=19 class=xl65 style='height:14.25pt'></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
        </tr>
        <tr height=19 style='height:14.25pt'>
            <td colspan=2 rowspan=4 height=76 class=xl67 style='height:57.0pt'>IE2409</td>
            <td class=xl65></td>
            <td rowspan=4 class=xl67>IE2408</td>
            <td rowspan=4 class=xl67>IE2407</td>
            <td colspan=2 rowspan=4 class=xl67>IE2406</td>
            <td colspan=2 rowspan=4 class=xl67>IE2405</td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td colspan=3 rowspan=4 class=xl71 style='border-bottom:.5pt solid black'>IE2404</td>
            <td rowspan=2 class=xl69 style='border-bottom:.5pt solid black'>&nbsp;</td>
            <td colspan=2 rowspan=4 class=xl67>IE2402</td>
            <td colspan=3 rowspan=4 class=xl67>IE2401</td>
        </tr>
        <tr height=19 style='height:14.25pt'>
            <td height=19 class=xl65 style='height:14.25pt'></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
        </tr>
        <tr height=19 style='height:14.25pt'>
            <td height=19 class=xl65 style='height:14.25pt'></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td rowspan=2 class=xl67 style='border-top:none'>IE2403</td>
        </tr>
        <tr height=19 style='height:14.25pt'>
            <td height=19 class=xl65 style='height:14.25pt'></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
        </tr>
        <tr height=19 style='height:14.25pt'>
            <td height=19 class=xl65 style='height:14.25pt'></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
        </tr>
        <tr height=19 style='height:14.25pt'>
            <td height=19 class=xl65 style='height:14.25pt'></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
        </tr>
        <tr height=19 style='height:14.25pt'>
            <td height=19 class=xl65 style='height:14.25pt'></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
        </tr>
        <tr height=19 style='height:14.25pt'>
            <td height=19 class=xl65 style='height:14.25pt'></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td colspan=2 rowspan=3 class=xl67>IE1409</td>
            <td class=xl65></td>
            <td colspan=2 rowspan=3 class=xl67>IE1404</td>
        </tr>
        <tr height=19 style='height:14.25pt'>
            <td height=19 class=xl65 style='height:14.25pt'></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
        </tr>
        <tr height=19 style='height:14.25pt'>
            <td height=19 class=xl65 style='height:14.25pt'></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
        </tr>
        <tr height=19 style='height:14.25pt'>
            <td height=19 class=xl65 style='height:14.25pt'></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td colspan=2 rowspan=3 class=xl67>IE1408</td>
            <td class=xl65></td>
            <td colspan=2 rowspan=3 class=xl67>IE1403</td>
        </tr>
        <tr height=19 style='height:14.25pt'>
            <td height=19 class=xl65 style='height:14.25pt'></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
        </tr>
        <tr height=19 style='height:14.25pt'>
            <td height=19 class=xl65 style='height:14.25pt'></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
        </tr>
        <tr height=19 style='height:14.25pt'>
            <td height=19 class=xl65 style='height:14.25pt'></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td colspan=2 rowspan=3 class=xl67>IE1407</td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
        </tr>
        <tr height=19 style='height:14.25pt'>
            <td height=19 class=xl65 style='height:14.25pt'></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
        </tr>
        <tr height=19 style='height:14.25pt'>
            <td height=19 class=xl65 style='height:14.25pt'></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
        </tr>
        <tr height=19 style='height:14.25pt'>
            <td height=19 class=xl65 style='height:14.25pt'></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td rowspan=3 class=xl68>IE1406</td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
        </tr>
        <tr height=19 style='height:14.25pt'>
            <td height=19 class=xl65 style='height:14.25pt'></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
        </tr>
        <tr height=19 style='height:14.25pt'>
            <td height=19 class=xl65 style='height:14.25pt'></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
        </tr>
        <tr height=19 style='height:14.25pt'>
            <td height=19 class=xl65 style='height:14.25pt'></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td rowspan=3 class=xl67 style='border-top:none'>IE1405</td>
            <td class=xl65></td>
            <td colspan=2 rowspan=3 class=xl67>IE1402</td>
        </tr>
        <tr height=19 style='height:14.25pt'>
            <td height=19 class=xl65 style='height:14.25pt'></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
        </tr>
        <tr height=19 style='height:14.25pt'>
            <td height=19 class=xl65 style='height:14.25pt'></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
        </tr>
        <tr height=19 style='height:14.25pt'>
            <td height=19 class=xl65 style='height:14.25pt'></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td colspan=2 rowspan=3 class=xl67>IE1401</td>
        </tr>
        <tr height=19 style='height:14.25pt'>
            <td height=19 class=xl65 style='height:14.25pt'></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
        </tr>
        <tr height=19 style='height:14.25pt'>
            <td height=19 class=xl65 style='height:14.25pt'></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
        </tr>
        <tr height=0 style='display:none'>
            <td width=53 style='width:40pt'></td>
            <td width=53 style='width:40pt'></td>
            <td width=53 style='width:40pt'></td>
            <td width=53 style='width:40pt'></td>
            <td width=53 style='width:40pt'></td>
            <td width=53 style='width:40pt'></td>
            <td width=53 style='width:40pt'></td>
            <td width=53 style='width:40pt'></td>
            <td width=53 style='width:40pt'></td>
            <td width=53 style='width:40pt'></td>
            <td width=53 style='width:40pt'></td>
            <td width=53 style='width:40pt'></td>
            <td width=53 style='width:40pt'></td>
            <td width=53 style='width:40pt'></td>
            <td width=53 style='width:40pt'></td>
            <td width=53 style='width:40pt'></td>
            <td width=53 style='width:40pt'></td>
            <td width=53 style='width:40pt'></td>
            <td width=53 style='width:40pt'></td>
            <td width=53 style='width:40pt'></td>
            <td width=53 style='width:40pt'></td>
        </tr>
    </table>
</div>

@endauth
@endsection
