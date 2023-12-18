<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;
    
    //relacion inversa
    public function equation(){
        return $this->belongsTo(Equation::class);
    }
}
