<?php

namespace App\Http\Controllers;

use App\Exports\ReportExport;
use App\Imports\EquationImport;
use App\Models\Equation;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ReportController extends Controller
{
    public function index()
    {
        $equation = Equation::all();
        return view('reports.index', compact('equation'));
    }
    public function show(Equation $equation)
    {
        //muesta la plantilla de como se presentara en el export, la plantilla original es reports excel
        return view('reports.show', compact('equation'));
    }

    public function export(Equation $equation)
    {
        //descarga el excel
        return Excel::download(new ReportExport($equation->id), 'report.xlsx');
    }
    public function test()
    {
        //solo para poder ver la plantilla original
        $equation = Equation::find(1);
        return view('reports.excel', compact('equation'));
    }

    //importar
    public function importstore(Request $request)
    {
        $request->validate([
            'file'=>'required|mimes:csv,xlsx'
        ]);
        $file = $request->file('file');
        Excel::import(new EquationImport, $file);
        return redirect()->route('equation.index');
    }
}
