<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Equation extends Model
{
    use HasFactory;
    //hacer directorio para imagenes al crear el primer site
    public function directory($site){
        Storage::makeDirectory($site);
    }
    //RELACIONES
    //relacion uno a uno
    public function torre(){
        return $this->hasOne(Torre::class);
    }
    public function address(){
        return $this->hasOne(Address::class);
    }
    //relacion uno a muchos
    public function contactos(){
        return $this->hasMany(Contacto::class);
    }
    //relacion polimorfica a muchos
    public function images(){
        return $this->morphMany(Image::class,'imageable');
    }
}
