@extends('layouts.master')

@section('css')
<link rel="stylesheet" href="{{ asset('css/home.css')}}">
@endsection
@section('content')
@auth

<div class="container">
    <!-- Image Map Generated by http://www.image-map.net/ -->
    <img src="https://raw.githubusercontent.com/Naphorn/ProjectMA/master/resources/views/images/level1.png" usemap="#image-map">

    <map name="image-map">
        <area target="" alt="IE4103" title="IE4103" onclick="ajax_get_data_room_detail('IE4103')" coords="20,21,144,94" shape="rect">
        <area target="" alt="IE4101" title="IE4101" onclick="ajax_get_data_room_detail('IE4101')" coords="146,20,344,94" shape="rect">
        <area target="" alt="IE3114" title="IE3114" onclick="ajax_get_data_room_detail('IE3114')" coords="381,21,504,94" shape="rect">
        <area target="" alt="SMO" title="SMO" onclick="ajax_get_data_room_detail('SMO')" coords="541,46,839,94" shape="rect">
        <area target="" alt="IE4102" title="IE4102" onclick="ajax_get_data_room_detail('IE4102')" coords="108,96,182,145" shape="rect">
        <area target="" alt="IE4104" title="IE4104" onclick="ajax_get_data_room_detail('IE4104')" coords="108,169,181,219" shape="rect">
        <area target="" alt="IE4105" title="IE4105" onclick="ajax_get_data_room_detail('IE4105')" coords="21,221,345,295" shape="rect">
        <area target="" alt="IE3113" title="IE3113" onclick="ajax_get_data_room_detail('IE3113')" coords="380,145,454,194" shape="rect">
        <area target="" alt="IE3112" title="IE3112" onclick="ajax_get_data_room_detail('IE3112')" coords="381,196,454,344" shape="rect">
        <area target="" alt="IE3111" title="IE3111" onclick="ajax_get_data_room_detail('IE3111')" coords="381,346,454,369" shape="rect">
        <area target="" alt="Canteen" title="Canteen" onclick="ajax_get_data_room_detail('Canteen')" coords="540,196,839,394" shape="rect">
        <area target="" alt="IE3109" title="IE3109" onclick="ajax_get_data_room_detail('IE3109')" coords="271,371,344,419" shape="rect">
        <area target="" alt="IE3108" title="IE3108" onclick="ajax_get_data_room_detail('IE3108')" coords="195,371,269,419" shape="rect">
        <area target="" alt="IE3107" title="IE3107" onclick="ajax_get_data_room_detail('IE3107')" coords="120,371,194,419" shape="rect">
        <area target="" alt="IE3106" title="IE3106" onclick="ajax_get_data_room_detail('IE3106')" coords="20,346,119,394" shape="rect">
        <area target="" alt="IE3105" title="IE3105" onclick="ajax_get_data_room_detail('IE3105')" coords="20,396,94,419" shape="rect">
        <area target="" alt="IE3104" title="IE3104" onclick="ajax_get_data_room_detail('IE3104')" coords="20,420,94,469" shape="rect">
        <area target="" alt="IE3103" title="IE3103" onclick="ajax_get_data_room_detail('IE3103')" coords="20,470,94,494" shape="rect">
        <area target="" alt="IE3102" title="IE3102" onclick="ajax_get_data_room_detail('IE3102')" coords="20,496,94,519" shape="rect">
        <area target="" alt="IE3101" title="IE3101" onclick="ajax_get_data_room_detail('IE3101')" coords="20,521,94,619" shape="rect">
        <area target="" alt="IE3110" title="IE3110" onclick="ajax_get_data_room_detail('IE3110')" coords="120,446,269,519" shape="rect">
        <area target="" alt="IE2107" title="IE2107" onclick="ajax_get_data_room_detail('IE2107')" coords="406,601,454,619" shape="rect">
        <area target="" alt="IE2108" title="IE2108" onclick="ajax_get_data_room_detail('IE2108')" coords="381,483,454,483,454,599,405,599,404,619,381,619" shape="poly">
        <area target="" alt="IE2106" title="IE2106" onclick="ajax_get_data_room_detail('IE2106')" coords="380,621,454,669" shape="rect">
        <area target="" alt="IE2102" title="IE2102" onclick="ajax_get_data_room_detail('IE2102')" coords="20,670,94,719" shape="rect">
        <area target="" alt="IE2103" title="IE2103" onclick="ajax_get_data_room_detail('IE2103')" coords="120,670,194,719" shape="rect">
        <area target="" alt="IE2104" title="IE2104" onclick="ajax_get_data_room_detail('IE2104')" coords="196,671,306,719" shape="rect">
        <area target="" alt="IE2101" title="IE2101" onclick="ajax_get_data_room_detail('IE2101')" coords="20,745,344,944" shape="rect">
        <area target="" alt="IE2109" title="IE2109" onclick="ajax_get_data_room_detail('IE2109')" coords="540,482,589,531" shape="rect">
        <area target="" alt="IE2110" title="IE2110" onclick="ajax_get_data_room_detail('IE2110')" coords="591,483,640,531" shape="rect">
        <area target="" alt="IE2111" title="IE2111" onclick="ajax_get_data_room_detail('IE2111')" coords="641,483,714,531" shape="rect">
        <area target="" alt="IE2112" title="IE2112" onclick="ajax_get_data_room_detail('IE2112')" coords="715,483,865,531" shape="rect">
        <area target="" alt="IE2113" title="IE2113" onclick="ajax_get_data_room_detail('IE2113')" coords="766,533,864,582" shape="rect">
        <area target="" alt="IE2114" title="IE2114" onclick="ajax_get_data_room_detail('IE2114')" coords="766,583,864,631" shape="rect">
        <area target="" alt="IE2105" title="IE2105" onclick="ajax_get_data_room_detail('IE2105')" coords="540,670,714,769" shape="rect">
        <area target="" alt="IE2115" title="IE2115" onclick="ajax_get_data_room_detail('IE2115')" coords="716,671,764,719" shape="rect">
        <area target="" alt="IE2119" title="IE2119" onclick="ajax_get_data_room_detail('IE2119')" coords="716,721,764,769" shape="rect">
        <area target="" alt="IE2116" title="IE2116" onclick="ajax_get_data_room_detail('IE2116')" coords="765,671,814,694" shape="rect">
        <area target="" alt="IE2117" title="IE2117" onclick="ajax_get_data_room_detail('IE2117')" coords="766,694,814,719" shape="rect">
        <area target="" alt="IE2118" title="IE2118" onclick="ajax_get_data_room_detail('IE2118')" coords="815,670,864,719" shape="rect">
    </map>
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
    {{-- ---------------------------------------------------------------------------------------------- --}}
</div>
<script type="text/javascript">
    function ajax_get_data_room_detail(id)
    {
        // $.ajaxSetup({
        //     headers: {
        //         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        //     }
        // });
        var txt = "";
        $.ajax({
            type: "GET",
            url: "/ajax_get_data_room_detail/"+id,
            //data: "&id="+id,
            success: function(response)
            {
                var obj = $.parseJSON(response['data']);

                txt += '<table class="table table-bordered table-striped">';
                txt += '<tr> <th>ID</th> <td>'+obj[0].id+'</td> </tr> <tr> <th>Floor</th> <td>'+obj[0].level_id+'</td> </tr> <tr> <th>Room</th> <td>'+obj[0].room_no+'</td> </tr> <tr> <th>Cold coil temperature</th> <td>'+obj[0].cool_temp+'</td> </tr> <tr> <th>Humidity</th> <td>'+obj[0].humidity+'</td> </tr> <tr> <th>Room temperature</th> <td>'+obj[0].room_temp+'</td> </tr> <tr> <th>Cold coil voltage</th> <td>'+obj[0].volt_cool+'</td> </tr> <tr> <th>Cold coil current</th> <td>'+obj[0].current_cool+'</td> </tr> <tr> <th>Hot coil current</th> <td>'+obj[0].current_hot+'</td> </tr> <tr> <th>Wind speed</th> <td>'+obj[0].wind_speed+'</td> </tr> <tr> <th>Performance</th><td>'+obj[0].performance+'<a href="{{action("StatusairController@performanceairs",'+obj[0].id+')}}" class="btn btn-success">Refresh</a></td></tr><tr> <th>Status</th> <td>'+obj[0].power_status+'</td> </tr> <tr> <th>Control</th> <td> <a href="{{action("StatusairController@poweron", '+obj[0].id+')}}" class="btn btn-success">ON</a> <a href="{{action("StatusairController@poweroff", '+obj[0].id+')}}" class="btn btn-danger">OFF</a> </td> </tr>';
                txt += '</table>';
                $("#exampleModalCenter").modal();
                $('#exampleModalCenter').find('.modal-title').html('Status');
                $('#exampleModalCenter').find('.modal-body').html(txt);
                // alert(response);
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
