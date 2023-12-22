<?php

namespace App\Http\Controllers;

use App\Models\Equation;
use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
    public function store(Equation $equation,Request $request){
        $request->validate([
            'file'=>'required|image',
            'descripcion'=>'required',
        ]);
        $imagen = $request->file('file')->store('public/equation');
        $url = Storage::url($imagen);
        $equation->images()->create([
            'url'=> $url,
            'descripcion'=> $request->descripcion
        ]);
        return redirect()->route('equation.show',$equation);
    }

    public function destroy(Image $image){
        $url = str_replace('storage','public',$image->url);
        Storage::delete($url);
        $image->delete();
        return redirect()->route('equation.show', $image->imageable_id);
    }
}
