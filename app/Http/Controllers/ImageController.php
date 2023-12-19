<?php

namespace App\Http\Controllers;

use App\Models\Equation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
    public function store(Equation $equation,Request $request){
        $request->validate([
            'file'=>'required|image'
        ]);
        $imagen = $request->file('file')->store('public/equation');
        $url = Storage::url($imagen);
        $equation->images()->create([
            'url'=> $url
        ]);
        return redirect()->route('equation.show',$equation);
    }
}
