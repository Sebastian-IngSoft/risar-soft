<?php

namespace App\Http\Controllers;

use App\Exports\ReportExport;
use App\Models\Equation;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ReportController extends Controller
{
    public function index(){
        $equation = Equation::all();
        return view('reports.index', compact('equation'));
    }
    public function show(Equation $equation){
        return view('reports.show',compact('equation'));
    }
    
    public function export(Equation $equation){
        return Excel::download( new ReportExport($equation->id),'report.xlsx');
    }
    public function test(){
        $equation=Equation::find(1);
        return view('reports.excel',compact('equation'));
    }
}
