{{-- @extends('layouts.sidebar') --}}
@extends('layouts.app')
@section('content')
@auth
<style>
        html, body {
            margin: 0px;
            padding: 0px;
            font-family: sans-serif;
        }
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

<div class="container">
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">สถานะ</button>

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
    <div id="dvCSV"></div>

    {{-- ---------------------------------------------------------------------------------------------- --}}
    {{-- ---------------------------------------------------------------------------------------------- --}}

    <style>
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
    <button onclick="mySw1()">1</button>
    <button onclick="mySw2()">2</button>
    <button onclick="mySw3()">4</button>
    <button onclick="mySw4()">8</button>

    <div id="myDIV"></div>

    <script>
        var a = 0;
        var b = 0;
        var c = 0;
        var d = 0;

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
    </script>

    {{-- ---------------------------------------------------------------------------------------------- --}}
    {{-- ---------------------------------------------------------------------------------------------- --}}

</div>



@endauth
@endsection
