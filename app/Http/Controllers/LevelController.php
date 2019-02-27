<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\StatusAir;
use App\Level;
use App\Building;

class LevelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $id = StatusAir::where('id',$id)->get();
        return view('level', compact('id'));
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
}
