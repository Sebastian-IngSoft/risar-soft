<?php

namespace App\Http\Controllers;

use App\Models\Torre;
use Illuminate\Http\Request;

class TorreController extends Controller
{   
    //crud torre
    public function store(Request $request){
        Torre::create($request->all());
        return redirect()->route('equation.show',$request->equation_id);
    }
    public function update(Torre $torre ,Request $request){
        $torre->update($request->all());
        return redirect()->route('equation.show',$torre->equation_id);
    }
}
