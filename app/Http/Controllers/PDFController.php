<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use App\StatusAir;

class PDFController extends Controller
{
    public function getPDF()
    {
        $reportstatus = StatusAir::where('performance','<',3)->get();
        $pdf = PDF::loadView('reports.reportstatus',['reportstatus'=>$reportstatus]);
        // return $pdf->download('reportstatus.pdf');
        return $pdf->stream('reportstatus.pdf');
    }
}
