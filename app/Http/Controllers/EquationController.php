<?php

namespace App\Http\Controllers;

use App\Exports\ReportExport;
use App\Models\Address;
use App\Models\Equation;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class EquationController extends Controller
{
    //crud equation
    public function index(){
        $equation = Equation::all();
        return view('equations.index',compact('equation'));
    }
    public function create(){
        return view('ecuaciones.crear');
    }
    public function store(Request $request){
        $ecuacione = new Equation();
        $ecuacione->site = $request->site;
        $ecuacione->directory('public/equation');
        $ecuacione->save();
        
        return redirect()->route('equation.index');
    }
    public function show($id){
        $equation=Equation::find($id);
        return view('equations.show',compact('equation'));
    }

    //para exportar
    public function excelreport(){
        return Excel::download( new ReportExport, 'reporte.xlsx');

    }
}
