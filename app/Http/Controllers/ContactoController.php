<?php

namespace App\Http\Controllers;

use App\Models\Contacto;
use Illuminate\Http\Request;

class ContactoController extends Controller
{
    public function store(Request $request){
        Contacto::create($request->all());
        return redirect()->route('equation.show',$request->equation_id);
    }
}
