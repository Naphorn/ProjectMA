@extends('layouts.master')

@section('css')
<script src="{{ asset('js/level-get-data-room.js') }}" defer></script>
@endsection
@section('content')
@auth
<style>
/* ----------------------EER Color-------------------- */
    .eer5
    {
        background-color: #00FF00;
    }
    .eer4to4.99
    {
        background-color: #9ACD32;
    }
    .eer3to3.99
    {
        background-color: #FFFF00;
    }
    .eer2to2.99
    {
        background-color: #FFA500;
    }
    .eer1to1.99
    {
        background-color: #FF0000;
    }
    .eererror
    {
        background-color: #000000;
    }
/* ---------------------------------------------------- */
    tr
    {mso-height-source:auto;}
    col
    {mso-width-source:auto;}
    br
    {mso-data-placement:same-cell;}
    .style0
    {mso-number-format:General;
    text-align:general;
    vertical-align:bottom;
    white-space:nowrap;
    mso-rotate:0;
    mso-background-source:auto;
    mso-pattern:auto;
    color:black;
    font-size:11.0pt;
    font-weight:400;
    font-style:normal;
    text-decoration:none;
    font-family:Tahoma, sans-serif;
    mso-font-charset:222;
    border:none;
    mso-protection:locked visible;
    mso-style-name:����;
    mso-style-id:0;}
    td
    {mso-style-parent:style0;
    padding-top:1px;
    padding-right:1px;
    padding-left:1px;
    mso-ignore:padding;
    color:black;
    font-size:11.0pt;
    font-weight:400;
    font-style:normal;
    text-decoration:none;
    font-family:Tahoma, sans-serif;
    mso-font-charset:222;
    mso-number-format:General;
    text-align:general;
    vertical-align:bottom;
    border:none;
    mso-background-source:auto;
    mso-pattern:auto;
    mso-protection:locked visible;
    white-space:nowrap;
    mso-rotate:0;}
    .xl65
    {mso-style-parent:style0;
    vertical-align:middle;}
    .xl66
    {mso-style-parent:style0;
    text-align:center;
    vertical-align:middle;
    border:.5pt solid windowtext;}
    .xl67
    {mso-style-parent:style0;
    text-align:center;
    vertical-align:middle;
    border-top:.5pt solid windowtext;
    border-right:.5pt solid windowtext;
    border-bottom:.5pt solid windowtext;
    border-left:none;}
    .xl68
    {mso-style-parent:style0;
    text-align:center;
    vertical-align:middle;
    border-top:.5pt solid windowtext;
    border-right:none;
    border-bottom:none;
    border-left:.5pt solid windowtext;}
    .xl69
    {mso-style-parent:style0;
    text-align:center;
    vertical-align:middle;
    border-top:.5pt solid windowtext;
    border-right:.5pt solid windowtext;
    border-bottom:none;
    border-left:none;}
    .xl70
    {mso-style-parent:style0;
    text-align:center;
    vertical-align:middle;
    border-top:none;
    border-right:none;
    border-bottom:none;
    border-left:.5pt solid windowtext;}
    .xl71
    {mso-style-parent:style0;
    text-align:center;
    vertical-align:middle;
    border-top:none;
    border-right:.5pt solid windowtext;
    border-bottom:none;
    border-left:none;}
    .xl72
    {mso-style-parent:style0;
    text-align:center;
    vertical-align:middle;
    border-top:none;
    border-right:.5pt solid windowtext;
    border-bottom:none;
    border-left:.5pt solid windowtext;}
    .xl73
    {mso-style-parent:style0;
    text-align:center;
    vertical-align:middle;
    border-top:none;
    border-right:.5pt solid windowtext;
    border-bottom:.5pt solid windowtext;
    border-left:.5pt solid windowtext;}
    .xl74
    {mso-style-parent:style0;
    text-align:center;
    vertical-align:middle;
    border-top:.5pt solid windowtext;
    border-right:.5pt solid windowtext;
    border-bottom:none;
    border-left:.5pt solid windowtext;}
</style>
<table border=0 cellpadding=0 cellspacing=0 width=100%>
<col class=xl65 width=53 span=28 style='mso-width-source:userset;mso-width-alt: 1696;width:40pt'>
    <tr height=19 style='height:14.25pt'>
    <td colspan=4 rowspan=6 height=114 class=xl66 width=212 style='height:85.5pt; width:160pt' onclick="ajax_get_data_room_detail('IE4103')">IE4103</td>
        <td colspan=5 rowspan=6 class=xl66 width=265 style='width:200pt' onclick="ajax_get_data_room_detail('IE4101')" id="tablecell">IE4101</td>
        <td class=xl65 width=53 style='width:40pt'></td>
        <td colspan=3 rowspan=6 class=xl66 width=159 style='width:120pt' onclick="ajax_get_data_room_detail('IE3114')">IE3114</td>
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
    </tr>
    <tr height=19 style='height:14.25pt'>
        <td height=19 class=xl65 style='height:14.25pt'></td>
        <td class=xl65></td>
        <td colspan=6 rowspan=4 class=xl66 onclick="ajax_get_data_room_detail('SMO')">SMO</td>
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
        <td colspan=2 rowspan=4 class=xl66 onclick="ajax_get_data_room_detail('IE4102')">IE4102</td>
        <td class=xl65></td>
        <td class=xl65></td>
        <td class=xl65></td>
        <td class=xl65></td>
        <td class=xl65></td>
        <td class=xl65></td>
        <td class=xl65></td>
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
        <td colspan=2 rowspan=4 class=xl66 onclick="ajax_get_data_room_detail('IE3113')">IE3113</td>
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
        <td colspan=2 rowspan=4 class=xl66 onclick="ajax_get_data_room_detail('IE4104')">IE4104</td>
        <td class=xl65></td>
        <td class=xl65></td>
        <td class=xl65></td>
        <td class=xl65></td>
        <td class=xl65></td>
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
        <td colspan=2 rowspan=10 class=xl66 onclick="ajax_get_data_room_detail('IE3112')">IE3112</td>
        <td class=xl65></td>
        <td class=xl65></td>
        <td colspan=6 rowspan=14 class=xl66 onclick="ajax_get_data_room_detail('Canteen')">Canteen</td>
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
        <td colspan=9 rowspan=6 height=114 class=xl66 style='height:85.5pt' onclick="ajax_get_data_room_detail('IE4105')">IE4105</td>
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
        <td colspan=3 rowspan=4 height=76 class=xl66 style='height:57.0pt' onclick="ajax_get_data_room_detail('IE31006')">IE31006</td>
        <td class=xl65></td>
        <td class=xl65></td>
        <td class=xl65></td>
        <td class=xl65></td>
        <td class=xl65></td>
        <td class=xl65></td>
        <td class=xl65></td>
        <td colspan=2 rowspan=2 class=xl66 onclick="ajax_get_data_room_detail('IE3111')">IE3111</td>
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
        <td colspan=2 rowspan=4 height=76 class=xl67 style='height:57.0pt' onclick="ajax_get_data_room_detail('IE3107')">IE3107</td>
        <td colspan=2 rowspan=4 class=xl66 onclick="ajax_get_data_room_detail('IE3108')">IE3108</td>
        <td colspan=2 rowspan=4 class=xl66 onclick="ajax_get_data_room_detail('IE3109')">IE3109</td>
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
        <td colspan=2 rowspan=2 height=38 class=xl66 style='height:28.5pt' onclick="ajax_get_data_room_detail('IE3105')">IE3105</td>
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
        <td colspan=2 rowspan=4 height=76 class=xl66 style='height:57.0pt' onclick="ajax_get_data_room_detail('IE3104')">IE3104</td>
        <td class=xl65></td>
        <td class=xl65></td>
        <td class=xl65></td>
        <td class=xl65></td>
        <td class=xl65></td>
        <td class=xl65></td>
        <td class=xl65></td>
        <td class=xl65></td>
        <td class=xl65></td>
        <td class=xl65></td>
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
        <td colspan=4 rowspan=6 class=xl66 onclick="ajax_get_data_room_detail('IE3110')">IE3110</td>
        <td class=xl65></td>
        <td class=xl65></td>
        <td class=xl65></td>
        <td class=xl65></td>
        <td class=xl65></td>
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
        <td colspan=2 rowspan=2 height=38 class=xl66 style='height:28.5pt' onclick="ajax_get_data_room_detail('IE3103')">IE3103</td>
        <td class=xl65></td>
        <td class=xl65></td>
        <td class=xl65></td>
        <td class=xl65></td>
        <td class=xl65></td>
        <td class=xl65></td>
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
        <td colspan=2 rowspan=10 class=xl68 style='border-right:.5pt solid black' onclick="ajax_get_data_room_detail('IE2108')">IE2108</td>
        <td class=xl65></td>
        <td rowspan=4 class=xl66 onclick="ajax_get_data_room_detail('IE2109')">IE2109</td>
        <td rowspan=4 class=xl66 onclick="ajax_get_data_room_detail('IE2110')">IE2110</td>
        <td colspan=2 rowspan=4 class=xl66 onclick="ajax_get_data_room_detail('IE2111')">IE2111</td>
        <td colspan=4 rowspan=4 class=xl66 onclick="ajax_get_data_room_detail('IE2112')">IE2112</td>
    </tr>
    <tr height=19 style='height:14.25pt'>
        <td colspan=2 rowspan=2 height=38 class=xl66 style='height:28.5pt' onclick="ajax_get_data_room_detail('IE3102')">IE3102</td>
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
        <td colspan=2 rowspan=8 height=152 class=xl66 style='height:114.0pt' onclick="ajax_get_data_room_detail('IE3101')">IE3101</td>
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
        <td colspan=2 rowspan=4 class=xl66 onclick="ajax_get_data_room_detail('IE2113')">IE2113</td>
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
        <td colspan=2 rowspan=4 class=xl66 onclick="ajax_get_data_room_detail('IE2114')">IE2114</td>
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
        <td rowspan=2 class=xl72 style='border-bottom:.5pt solid black'>&nbsp;</td>
        <td rowspan=2 class=xl66 onclick="ajax_get_data_room_detail('IE2107')">IE2107</td>
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
        <td colspan=2 rowspan=4 class=xl66 onclick="ajax_get_data_room_detail('IE2106')">IE2106</td>
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
        <td colspan=2 rowspan=4 height=76 class=xl66 style='height:57.0pt' onclick="ajax_get_data_room_detail('IE2102')">IE2102</td>
        <td class=xl65></td>
        <td colspan=2 rowspan=4 class=xl66 onclick="ajax_get_data_room_detail('IE2103')">IE2103</td>
        <td colspan=3 rowspan=4 class=xl66 onclick="ajax_get_data_room_detail('IE2104')">IE2104</td>
        <td class=xl65></td>
        <td class=xl65></td>
        <td class=xl65></td>
        <td class=xl65></td>
        <td class=xl65></td>
        <td colspan=4 rowspan=8 class=xl66 onclick="ajax_get_data_room_detail('IE2105')">IE2105</td>
        <td colspan=2 rowspan=4 class=xl66 onclick="ajax_get_data_room_detail('IE2115')">IE2115</td>
        <td rowspan=2 class=xl67 onclick="ajax_get_data_room_detail('IE2116')">IE2116</td>
        <td rowspan=4 class=xl66 onclick="ajax_get_data_room_detail('IE2118')">IE2118</td>
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
        <td rowspan=2 class=xl67 style='border-top:none' onclick="ajax_get_data_room_detail('IE2117')">IE2117</td>
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
        <td colspan=2 rowspan=4 class=xl66 onclick="ajax_get_data_room_detail('IE2119')">IE2119</td>
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
        <td colspan=9 rowspan=15 height=285 class=xl66 style='height:213.75pt' onclick="ajax_get_data_room_detail('IE2101')">IE2101</td>
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
<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalCenterTitle">Status</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
{{-- ---------------------------------------------------------------------------------------------- --}}
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

<script>
    function ajax_get_data_eer_alert(id)
    {
        // $.ajaxSetup({
        //     headers: {
        //         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        //     }
        // });
        var color = "";
        $.ajax({
            type: "GET",
            url: "/ajax_get_data_eer_alert/"+id,
            //data: "&id="+id,
            success: function(response)
            {
                var obj = $.parseJSON(response['performances']);
                
                color = '<td>+obj[0].performance+</td>';
                alert(obj);
            },
            error: function()
            {
                alert('Error');
            }
        });
        return false;
    }
</script>

@endauth
@endsection
