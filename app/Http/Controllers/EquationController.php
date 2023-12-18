<?php

namespace App\Http\Controllers;

use App\Models\Equation;
use Illuminate\Http\Request;

class EquationController extends Controller
{
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
        $ecuacione->save();
    }
    public function show($id){
        $ecuacione=Equation::find($id);
    }
}
