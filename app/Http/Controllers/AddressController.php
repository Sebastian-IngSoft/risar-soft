<?php

namespace App\Http\Controllers;

use App\Models\Address;
use Illuminate\Http\Request;

class AddressController extends Controller
{

    //crud address
    public function store(Request $request){
        Address::create($request->all());
        return redirect()->route('equation.show',$request->equation_id);
    }
    public function update(Address $address, Request $request){
        $address->update($request->all());
        return redirect()->route('equation.show',$address->equation_id);
    }
}
