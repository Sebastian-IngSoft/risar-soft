<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Torre extends Model
{
    use HasFactory;
    protected $guarded = [];
    //relacion inversa
    public function equation(){
        return $this->belongsTo(Equation::class);
    }
}
