<?php

namespace App\Http\Controllers;

use App\Models\Address;
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
        return redirect()->route('equation.index');
    }
    public function storeaddress(Request $request){
        $address= Address::create($request->all());
        return redirect()->route('equation.show',$request->equation_id);
    }
    public function show($id){
        $equation=Equation::find($id);
        return view('equations.show',compact('equation'));
    }
}
