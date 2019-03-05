@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/home.css')}}">
<link rel="stylesheet" href="{{ asset('css/level1map.css')}}">
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
          
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">ปิด</button>
        </div>
        </div>
    </div>
    </div>
    {{-- ---------------------------------------------------------------------------------------------- --}}
    {{-- ---------------------------------------------------------------------------------------------- --}}
    <table border=0 cellpadding=0 cellspacing=0 width=1113 style='border-collapse:collapse;table-layout:fixed;width:840pt'>
        <col class=xl65 width=53 span=28 style='mso-width-source:userset;mso-width-alt:1696;width:40pt'>
        <tr height=19 style='height:14.25pt'>
            <td colspan=4 rowspan=6 height=114 class=xl66 width=212 style='height:85.5pt;width:160pt'>
            <a  onclick="ajax_get_data_room_detail('IE4103')">IE4103</a></td>
 			<td colspan=4 rowspan=6 height=114 class=xl66 width=212 style='height:85.5pt;width:160pt'>
            <a  onclick="ajax_get_data_room_detail('IE4101')">IE4101</a></td>
             <td colspan=4 rowspan=6 height=114 class=xl66 width=212 style='height:85.5pt;width:160pt'>
            <a  onclick="ajax_get_data_room_detail('IE3114')">IE3114</a></td>
            <td class=xl65 width=53 style='width:40pt'></td>
            <td class=xl65 width=53 style='width:40pt'></td>
            <td class=xl65 width=53 style='width:40pt'></td>
            <td class=xl65 width=53 style='width:40pt'></td>
            <td class=xl65 width=53 style='width:40pt'></td>
            <td class=xl65 width=53 style='width:40pt'></td>
            <td class=xl65 width=53 style='width:40pt'></td>
            <td class=xl65 width=53 style='width:40pt'></td>
        </tr>
        <!-- Modal -->
<div class="modal fade" id="modal" role="dialog">
    <!-- <form method="POST" id="form-promote"> -->
    <form class="tagForm" id="tag-form" action="" method="post" enctype="multipart/form-data">
    <div class="modal-dialog">
        
        <!-- Modal content-->
        <div class="modal-content">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title"></h4>
            </div>
            <div class="modal-body">
                
                   
                
            </div>
            <div class="modal-footer">
                <!-- <button type="submit" class="btn btn-primary">Send</button> -->
                <input id="tag-form-submit" type="submit" class="btn btn-primary" value="Send">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </form>
        </div>
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
        </tr>
        <tr height=19 style='height:14.25pt'>
            <td height=19 class=xl65 style='height:14.25pt'></td>
            <td class=xl65></td>
            <td colspan=6 rowspan=4 class=xl66>SMO</td>
            <td class=xl65></td>
        </tr>
        <tr height=19 style='height:14.25pt'>
            <td height=19 class=xl65 style='height:14.25pt'></td>
            <td class=xl65></td>
            <td class=xl65></td>
        </tr>
        <tr height=19 style='height:14.25pt'>
            <td height=19 class=xl65 style='height:14.25pt'></td>
            <td class=xl65></td>
            <td class=xl65></td>
        </tr>
        <tr height=19 style='height:14.25pt'>
            <td height=19 class=xl65 style='height:14.25pt'></td>
            <td class=xl65></td>
            <td class=xl65></td>
        </tr>
        <tr height=19 style='height:14.25pt'>
            <td height=19 class=xl65 style='height:14.25pt'></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td colspan=2 rowspan=4 class=xl66><a  onclick="ajax_get_data_room_detail('IE4102')">IE4102</a></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
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
            <td colspan=2 rowspan=4 class=xl66>IE3113</td>
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
            <td colspan=2 rowspan=4 class=xl66>IE4104</td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
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
            <td colspan=2 rowspan=10 class=xl66>IE3112</td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td colspan=6 rowspan=14 class=xl66>Canteen</td>
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
            <td colspan=9 rowspan=6 height=114 class=xl66 style='height:85.5pt'>IE4105</td>
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
            <td colspan=3 rowspan=4 height=76 class=xl66 style='height:57.0pt'>IE31006</td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td colspan=2 rowspan=2 class=xl66>IE3111</td>
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
        </tr>
        <tr height=19 style='height:14.25pt'>
            <td colspan=2 rowspan=4 height=76 class=xl68 style='height:57.0pt'>IE3107</td>
            <td colspan=2 rowspan=4 class=xl66>IE3108</td>
            <td colspan=2 rowspan=4 class=xl66>IE3109</td>
            <td rowspan=2 class=xl66>&nbsp;</td>
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
        </tr>
        <tr height=19 style='height:14.25pt'>
            <td colspan=2 rowspan=2 height=38 class=xl66 style='height:28.5pt'>E3105</td>
            <td class=xl65></td>
            <td rowspan=2 class=xl66 style='border-top:none'>&nbsp;</td>
            <td class=xl65></td>
            <td class=xl65></td>
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
        </tr>
        <tr height=19 style='height:14.25pt'>
            <td colspan=2 rowspan=4 height=76 class=xl66 style='height:57.0pt'>IE3104</td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
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
            <td colspan=4 rowspan=6 class=xl66>IE3110</td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
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
        </tr>
        <tr height=19 style='height:14.25pt'>
            <td colspan=2 rowspan=2 height=38 class=xl66 style='height:28.5pt'>IE3103</td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
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
            <td colspan=2 rowspan=10 class=xl69 style='border-right:.5pt solid black'>IE2108</td>
            <td class=xl65></td>
            <td rowspan=4 class=xl66>IE2109</td>
            <td rowspan=4 class=xl66>IE2110</td>
            <td colspan=2 rowspan=4 class=xl66>IE2111</td>
            <td colspan=4 rowspan=4 class=xl66>IE2112</td>
        </tr>
        <tr height=19 style='height:14.25pt'>
            <td colspan=2 rowspan=2 height=38 class=xl66 style='height:28.5pt'>IE3102</td>
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
        </tr>
        <tr height=19 style='height:14.25pt'>
            <td colspan=2 rowspan=8 height=152 class=xl66 style='height:114.0pt'>IE3101</td>
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
            <td colspan=2 rowspan=4 class=xl66>IE2113</td>
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
            <td colspan=2 rowspan=4 class=xl66>IE2114</td>
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
            <td rowspan=2 class=xl71 style='border-bottom:.5pt solid black'>&nbsp;</td>
            <td rowspan=2 class=xl66>IE2107</td>
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
            <td colspan=2 rowspan=4 class=xl66>IE2106</td>
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
            <td colspan=2 rowspan=4 height=76 class=xl66 style='height:57.0pt'>IE2102</td>
            <td class=xl65></td>
            <td colspan=2 rowspan=4 class=xl66>IE2103</td>
            <td colspan=3 rowspan=4 class=xl66>IE2104</td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td class=xl65></td>
            <td colspan=4 rowspan=8 class=xl66>IE2105</td>
            <td colspan=2 rowspan=4 class=xl66>IE2115</td>
            <td rowspan=2 class=xl68>IE2116</td>
            <td rowspan=4 class=xl66>IE2118</td>
        </tr>
        <tr height=19 style='height:14.25pt'>
            <td height=19 class=xl65 style='height:14.25pt'></td>
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
            <td rowspan=2 class=xl68 style='border-top:none'>IE2117</td>
        </tr>
        <tr height=19 style='height:14.25pt'>
            <td height=19 class=xl65 style='height:14.25pt'></td>
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
            <td colspan=2 rowspan=4 class=xl66>IE2119</td>
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
        </tr>
        <tr height=19 style='height:14.25pt'>
            <td colspan=9 rowspan=15 height=285 class=xl66 style='height:213.75pt'>IE2101</td>
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
 <script type="text/javascript">
        function ajax_get_data_room_detail(id){
            // $.ajaxSetup({
            //     headers: {
            //         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            //     }
            // });
            var txt = "";
           $.ajax({
                    type: "GET",
                    url: "/public/ajax_get_data_room_detail/"+id,
                    //data: "&id="+id,
                    success: function(response) {
                        var obj = $.parseJSON(response['data']);
                        
                        txt += '<table class="table table-bordered table-striped">';
                        txt += '<tr> <th>เลขเครื่อง</th> <td>'+obj[0].id+'</td> </tr> <tr> <th>ชั้น</th> <td>'+obj[0].level_id+'</td> </tr> <tr> <th>ห้อง</th> <td>'+obj[0].room_no+'</td> </tr> <tr> <th>อุณหภูมิคอยล์เย็น</th> <td>'+obj[0].cool_temp+'</td> </tr> <tr> <th>ความชื้นสัมพัทธ์</th> <td>'+obj[0].humidity+'</td> </tr> <tr> <th>อุณหภูมิห้อง</th> <td>'+obj[0].room_temp+'</td> </tr> <tr> <th>แรงดันคอยล์เย็น</th> <td>'+obj[0].volt_cool+'</td> </tr> <tr> <th>กระแสคอยล์เย็น</th> <td>'+obj[0].current_cool+'</td> </tr> <tr> <th>กระแสคอยล์ร้อน</th> <td>'+obj[0].current_hot+'</td> </tr> <tr> <th>ความเร็วลม</th> <td>'+obj[0].wind_speed+'</td> </tr> <tr> <th>ประสิทธิภาพ</th><td>'+obj[0].performance+'<a href="{{action("StatusairController@performanceairs",'+obj[0].id+')}}" class="btn btn-success">Refresh</a></td></tr><tr> <th>สถานะ</th> <td>'+obj[0].power_status+'</td> </tr> <tr> <th>ส่วนควบคุม</th> <td> <a href="{{action("StatusairController@poweron", '+obj[0].id+')}}" class="btn btn-success">ON</a> <a href="{{action("StatusairController@poweroff", '+obj[0].id+')}}" class="btn btn-danger">OFF</a> </td> </tr>';
                        txt += '</table>';                                            
                        $("#exampleModalCenter").modal();
                        $('#exampleModalCenter').find('.modal-title').html('สถานะ');
                        $('#exampleModalCenter').find('.modal-body').html(txt);
                       // alert(response);
                    },
                    error: function() {
                        alert('Error');
                    }
                });
                    return false;
        }

        </script>
@endauth
@endsection
