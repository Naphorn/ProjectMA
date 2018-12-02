<!-- // ฝากไว้ก่อน -->

@foreach($statusairs as $row) 
        <tr> 
            <td>{{$row->level_no}}</td> 
            <td>{{$row->level->room_no}}</td> 
            <td>{{$row->cool_temp}}</td> 
            <td>{{$row->humidity}}</td> 
            <td>{{$row->room_temp}}</td> 
            <td>{{$row->volt_cool}}</td> 
            <td>{{$row->current_cool}}</td> 
            <td>{{$row->current_hot}}</td> 
            <td>{{$row->wind_speed}}</td> 
            <td>{{$row->performance}}</td> 
            <td>{{$row->power_status}}</td> 
        </tr> 
        @endforeach 