<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\StatusAir;
use App\Level;

class StatusairController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $statusairs = StatusAir::where('id',1)->get();
        return view('home', compact('statusairs'));
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

    // คำนวณหาค่า Performance ของเครื่องปรับอากาศ
    public function performanceairs($id)
    {
        $statusairs = StatusAir::find($id);
        $volt = StatusAir::where('volt_cool', '<', 300)->pluck('volt_cool')->first();
        $cc=StatusAir::where('current_cool', '<', '10')->pluck('current_cool')->first();
        $ch=StatusAir::where('current_hot', '<', '10')->pluck('current_hot')->first();
        
        $p1=($volt*$cc);
        $p2=($volt*$ch);
        $p=($p1+$p2);

        $btu=18000;

        $eer=($btu/$p);

        if($eer>=11.60)
        {
            $eers=5;
        }
        else if($eer>=11.00 && $eer<=11.59)
        {
            $eers=4;
        }
        else if($eer>=10.60 && $eer<=10.99)
        {
            $eers=3;
        }
        else if($eer>=10.00 && $eer<=10.59)
        {
            $eers=2;
        }
        else if($eer<=9.99)
        {
            $eers=1;
        }
        
        $statusairs->performance = $eers;
        $statusairs->save();
        // echo $statusairs;
        return back()->withInput();
        // return view('home');
    }
}
