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