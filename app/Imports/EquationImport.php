<?php

namespace App\Imports;

use App\Models\Address;
use App\Models\Equation;
use App\Models\Torre;
use Maatwebsite\Excel\Concerns\ToCollection;

class EquationImport implements ToCollection
{
    public function collection($rows){
        //importando dato de equaciones direccion y torre segun el excel, sin cabecera en el excel
        foreach ($rows as $row) {
            $equation = Equation::create([
                'site'=>$row[1]
            ]);

            Address::create([
                'larga' =>$row[5],
                'departamento'=>$row[6],
                'provincia'=>$row[7],
                'distrito'=>$row[8],
                'latitud'=>$row[9],
                'longitud'=>$row[10],
                'equation_id'=>$equation->id
            ]);
            Torre::create([
                'tipo'=>$row[11],
                'altura'=>$row[12],
                'estacion'=>$row[13],
                'equation_id'=>$equation->id
            ]);
        }
    }
}
