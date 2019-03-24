<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function index_frontend()
    {
    	$buildings = DB::table('buildings')->get();
        return view('main',['buildings' => $buildings]);
    }

    public function building_index($building_id)
    {
    	$data = DB::table('levels')
    	->where('building_id', $building_id)
    	->get();
        return view('building',['data' => $data]);
    }

    public function building_detail($building_id,$level_id)
    {
    	$buildings = DB::table('buildings')
    			->where('buildings.id', $building_id)
				->first();
    	$levels = DB::table('levels')
                ->where('levels.id', $level_id)
                ->first();
    	$data = DB::table('status_airs')
		    	->join('levels', 'levels.id', '=', 'status_airs.level_id')
		        ->join('buildings', 'buildings.id', '=', 'levels.building_id')
            	->select('status_airs.*')
    			->where('buildings.id', $building_id)
    			->where('levels.id', $level_id)
				->get();
        return view('building_detail',['data' => $data,'buildings' => $buildings,'levels' => $levels]);
        // dd($levels) ;
    }
}
