<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\StatusAir;
class notify extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'notify';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'notification';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        //
        $statusairs1 = StatusAir::where('performance','<',3)->where('level_id',1)
        ->pluck('room_no')
        ->pluck('performance');
        // ->select('room_no','performance')->get();
        // ->value('room_no','performance');
        
        
        
        //$detail1 = $statusairs1['room_no'];
        //$detail1 = json_decode($statusairs1);
        //$room1 = $detail1->'room_no';

        //$statusairs2 = StatusAir::where('performance','<',3)->where('level_id',2)
        //->pluck('room_no','performance');
        //->select('room_no','performance')->get();
        function sendToLine($message){
        

        $line_api = 'https://notify-api.line.me/api/notify';
        $line_token = 'AGnM9Q9rBjUh8HCLBEa3TdGFrz2Ub6788WUdmpjXew6';

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL,"https://notify-api.line.me/api/notify");
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, 'message=Low Performance
Floor 1
'.$message);
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
        
        //--------------------------
//         $ch1 = curl_init();
//         curl_setopt($ch1, CURLOPT_URL,"https://notify-api.line.me/api/notify");
//         curl_setopt($ch1, CURLOPT_SSL_VERIFYHOST, 0);
//         curl_setopt($ch1, CURLOPT_SSL_VERIFYPEER, 0);
//         curl_setopt($ch1, CURLOPT_POST, 1);
//         curl_setopt($ch1, CURLOPT_POSTFIELDS, 'message=Low Performance
// Floor 2
// '.$message2);
//         // follow redirects
//         curl_setopt($ch1, CURLOPT_FOLLOWLOCATION, 1);
//         curl_setopt($ch1, CURLOPT_HTTPHEADER, [
//             'Content-type: application/x-www-form-urlencoded',
//             'Authorization: Bearer '.$line_token,
//         ]);
//         // receive server response ...
//         curl_setopt($ch1, CURLOPT_RETURNTRANSFER, true);

//         $server_output = curl_exec ($ch1);

//         curl_close ($ch);

        }
        // $data1 = implode(" ", (array)$statusairs1);
        $string = '';

        foreach ($statusairs1 as $key => $value) {
            $string .= "$value\n";
        }
        
        $string = substr($string, 1); // remove leading ","
        // foreach($statusairs1 as $row){
           
        // }
        sendToLine($string); 

    }
}
