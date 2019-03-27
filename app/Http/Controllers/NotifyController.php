<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\StatusAir;
use App\Level;
use App\Building;

class NotifyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $statusairs1 = StatusAir::where('performance','<',3)->get();
        $statusairs1 = StatusAir::where('performance','<',3)->pluck('room_no');
        return view('notify', compact('statusairs1'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            // 'cool_temp' => 'required',
            // 'humidity' => 'required',
            // 'room_temp' => 'required',
            // 'volt_cool' => 'required',
            // 'current_cool' => 'required',
            // 'current_hot' => 'required',
            // 'wind_speed' => 'required',
            'performance' => 'required',
            // 'power_status' => 'required',
        ]);
        $statusairs1 = new StatusAir
        ([
            'level_id' => $request->get('level_id'),
            'room_no' => $request->get('room_no'),
            // 'cool_temp' => $request->get('cool_temp'),
            // 'humidity' => $request->get('humidity'),
            // 'room_temp' => $request->get('room_temp'),
            // 'volt_cool' => $request->get('volt_cool'),
            // 'current_cool' => $request->get('current_cool'),
            // 'current_hot' => $request->get('current_hot'),
            // 'wind_speed' => $request->get('wind_speed'),
            'performance' => $request->get('performance'),
        //     'power_status' => $request->get('power_status'),
        ]);
        $statusairs1->save();
        return view("notify")->with('success','Complet');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
