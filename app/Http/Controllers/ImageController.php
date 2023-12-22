<?php

namespace App\Http\Controllers;

use App\Models\Equation;
use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
    public function store(Equation $equation,Request $request){
        //guarda en servidor y bd
        //se hizo con fillable los campos file y description
        $request->validate([
            'file'=>'required|image',
            'descripcion'=>'required',
        ]);
        $imagen = $request->file('file')->store('public/equation');//guarda la imagen en el storage
        $url = Storage::url($imagen);//toma la url y la convierte en /storage/ para que pueda ser listada
        $equation->images()->create([//la crea en la bd
            'url'=> $url,
            'descripcion'=> $request->descripcion
        ]);
        return redirect()->route('equation.show',$equation);
    }

    public function destroy(Image $image){
        //elimina en bd y servidor
        $url = str_replace('storage','public',$image->url);//reemplaza el /storage/ por /public/ para eliminarla en el mismo storage
        Storage::delete($url);//elimina en el storage
        $image->delete();//elimina en la bd
        return redirect()->route('equation.show', $image->imageable_id);
    }
}
