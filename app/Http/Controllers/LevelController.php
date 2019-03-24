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
        $levels = Level::get();
        return view('admin.adminlevel', compact('levels'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.addlevel');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [ 'level_name' => 'required', 'building_id' => 'required' , 'imglink' => 'required' ]);
        $levels = new Level
        ([
            'level_name' => $request->get('level_name'),
            'building_id' => $request->get('building_id'),
            'imglink' => $request->get('imglink')
        ]);
        $levels->save();
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
        $levels = Level::find($id);
	    return view('admin.editlevel', compact('levels', 'id'));
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
            'level_name' => 'required',
            'building_id' => 'required',
            'imglink' => 'required'
        ]);
        $levels = Level::find($id);

        $levels->level_name = $request->get('level_name');
        $levels->building_id = $request->get('building_id');
        $levels->imglink = $request->get('imglink');

        $levels->save();
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
        $levels = Level::find($id);
        $levels->delete();
        return view("home")->with('success', 'Delete data successfully');
    }
}
