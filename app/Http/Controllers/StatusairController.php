<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\StatusAir;
use App\Level;
use App\Building;
use Illuminate\Support\Facades\DB;

class StatusairController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $statusairs = StatusAir::paginate(10);
        return view('admin.adminstatus', compact('statusairs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.addstatus');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'level_id' => 'required',
            'room_no' => 'required',
            'cool_temp' => 'required',
            'humidity' => 'required',
            'room_temp' => 'required',
            'volt_cool' => 'required',
            'current_cool' => 'required',
            'current_hot' => 'required',
            'wind_speed' => 'required',
            'performance' => 'required',
            'power_status' => 'required',
        ]);
        $statusairs = new StatusAir
        ([
            'level_id' => $request->get('level_id'),
            'room_no' => $request->get('room_no'),
            'cool_temp' => $request->get('cool_temp'),
            'humidity' => $request->get('humidity'),
            'room_temp' => $request->get('room_temp'),
            'volt_cool' => $request->get('volt_cool'),
            'current_cool' => $request->get('current_cool'),
            'current_hot' => $request->get('current_hot'),
            'wind_speed' => $request->get('wind_speed'),
            'performance' => $request->get('performance'),
            'power_status' => $request->get('power_status'),
        ]);
        $statusairs->save();
        return view("admin")->with('success','Complet');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $statusairs = StatusAir::find($id);
	    return view('admin.editstatus', compact('statusairs', 'id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'level_id' => 'required',
            'room_no' => 'required',
            'cool_temp' => 'required',
            'humidity' => 'required',
            'room_temp' => 'required',
            'volt_cool' => 'required',
            'current_cool' => 'required',
            'current_hot' => 'required',
            'wind_speed' => 'required',
            'performance' => 'required',
            'power_status' => 'required',
        ]);
        $statusairs = StatusAir::find($id);

        $statusairs->level_id = $request->get('level_id');
        $statusairs->room_no = $request->get('room_no');
        $statusairs->cool_temp = $request->get('cool_temp');
        $statusairs->humidity = $request->get('humidity');
        $statusairs->room_temp = $request->get('room_temp');
        $statusairs->volt_cool = $request->get('volt_cool');
        $statusairs->current_cool = $request->get('current_cool');
        $statusairs->current_hot = $request->get('current_hot');
        $statusairs->wind_speed = $request->get('wind_speed');
        $statusairs->performance = $request->get('performance');
        $statusairs->power_status = $request->get('power_status');

        $statusairs->save();
        return view("admin")->with('success','Update Complet');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $statusairs = StatusAir::find($id);
        $statusairs->delete();
        return view("admin")->with('success', 'Delete data successfully');
    }

    // ควบคุม switch ON ของเครื่องปรับอากาศ
    public function poweron($id)
    {
        $poweron = StatusAir::find($id);
        $poweron->power_status = 'ON';
        $poweron->save();
        return back()->withInput();
    }

    // ควบคุม switch OFF ของเครื่องปรับอากาศ
    public function poweroff($id)
    {
        $poweroff = StatusAir::find($id);
        $poweroff->power_status = 'OFF';
        $poweroff->save();
        return back()->withInput();
    }

    public function room_detail($id)
    {
        // echo "string";
        $statusairs = StatusAir::where('room_no',$id)->get();
        // $statusairs =  json_decode(json_encode($statusairs));
        return response()->json(['success'=>'Data is successfully added ','data'=>json_encode($statusairs)]);
        //return response()->json(['response' => $statusairs]);
    }

    public function chartstatus()
    {
        // Chart สถานะ เปิด/ปิด เครื่องปรับอากาศ
        $chartstatuson = StatusAir::where('power_status','ON')->count();
        $chartstatusoff = StatusAir::where('power_status','OFF')->count();
        // Chart ค่าประสิทธิภาพเครื่องปรับอากาศ
        $chartperformance5 = StatusAir::where('performance','=',5)->count();
        $chartperformance4 = StatusAir::where('performance','=',4)->count();
        $chartperformance3 = StatusAir::where('performance','=',3)->count();
        $chartperformance2 = StatusAir::where('performance','=',2)->count();
        $chartperformance1 = StatusAir::where('performance','=',1)->count();
        // Chart จำนวนเครื่องปรับอากาศ/เวลา
        // $usageperiod = StatusAir::where(DB::raw("(DATE_FORMAT(created_at,'%Y'))"),date('Y'))->get();

        // ---------------------------------------------------------------------------------------- //
        return view('home', [
            'chartstatuson' => $chartstatuson,
            'chartstatusoff' => $chartstatusoff,
            'chartperformance5' => $chartperformance5,
            'chartperformance4' => $chartperformance4,
            'chartperformance3' => $chartperformance3,
            'chartperformance2' => $chartperformance2,
            'chartperformance1' => $chartperformance1,
            // 'usageperiod' => $usageperiod,
        ]);
        // echo $usageperiod;
        // dd($usageperiod);
    }
}
