<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\StatusAir;
use App\Level;
use App\Building;

class BuildingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $builds = Building::get();
        return view('admin.adminbuilding', compact('builds'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.addbuilding');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [ 'building_name' => 'required']);
        $builds = new Building
        ([
            'building_name' => $request->get('building_name'),
        ]);
        $builds->save();
        return view("home")->with('success','Complet');
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
        $builds = Building::find($id);
	    return view('admin.editbuilding', compact('builds', 'id'));
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
        $this->validate($request, [ 'building_name' => 'required']);
        $builds = Building::find($id);

        $builds->building_name = $request->get('building_name');

        $builds->save();
        return view("home")->with('success','Update Complet');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // dd($id);
        $builds = Building::find($id);
        $builds->delete();
        return view("home")->with('success', 'Delete data successfully');
    }
}
