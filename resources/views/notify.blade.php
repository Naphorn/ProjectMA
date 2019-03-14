@extends('layouts.master')

@section('css')

    {{-- <script src="{{ asset('notify/index.js') }}" defer></script> --}}
@endsection
@section('content')
@auth

<div class="container" style="majin-top:25px;">
    <div class="row">
        <div class="col-md-3" style="border:1px solid #ddd; min-hight: 150px; padding:7px 12px; text-align: center">
            <a href="#" class="btn btn-danger send-notity" data-id="1"> แจ้งข้อความขัดข้อง</a>
        </div>
        <div class="col-md-3" style="border:1px solid #ddd; min-hight: 150px; padding:7px 12px; text-align: center">
            <a href="#" class="btn btn-danger send-notity" data-id="1"> แจ้งข้อความขัดข้อง</a>
        </div>
        <div class="col-md-3" style="border:1px solid #ddd; min-hight: 150px; padding:7px 12px; text-align: center">
            <a href="#" class="btn btn-danger send-notity" data-id="1"> แจ้งข้อความขัดข้อง</a>
        </div>
        <div class="col-md-3" style="border:1px solid #ddd; min-hight: 150px; padding:7px 12px; text-align: center">
            <a href="#" class="btn btn-danger send-notity" data-id="1"> แจ้งข้อความขัดข้อง</a>
        </div>

        <?php
function sendToLine($message){
        

        $line_api = 'https://notify-api.line.me/api/notify';
        $line_token = 'ccduc9ATE0AkQrQkFy5mzXHts9PumeniAU6Rlc6Ivoe';

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL,"https://notify-api.line.me/api/notify");
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, 'message='.$message);
        // follow redirects
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            'Content-type: application/x-www-form-urlencoded',
            'Authorization: Bearer '.$line_token,
        ]);
        // receive server response ...
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $server_output = curl_exec ($ch);

        curl_close ($ch);
}

sendToLine('ทดลองส่ง1');

?>
</div>

@endauth
@endsection
