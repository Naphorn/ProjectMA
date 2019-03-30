<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Report</title>
    <style>
        table {
            width: 70%;
            margin: 0 auto;
            border: 1px solid;
        }
    </style>
</head>
<body>
<caption><h1>Report Air Conditioner Low Performance</h1></caption>
    <table>
        <thead>
            <tr align="center">
                <th>ID</th>
                <th>Floor</th>
                <th>Room Name</th>
                <th>EER</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($reportstatus as $item)
                <tr align="center">
                    <td>{{$item->id}}</td>
                    <td>{{$item->level_id}}</td>
                    <td>{{$item->room_no}}</td>
                    <td>{{$item->performance}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>



</body>
</html>
