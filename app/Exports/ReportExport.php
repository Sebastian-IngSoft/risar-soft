<?php

namespace App\Exports;

use App\Models\Equation;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithDrawings;
use PhpOffice\PhpSpreadsheet\Worksheet\Drawing;

class ReportExport implements FromView,ShouldAutoSize,WithDrawings{

    use Exportable;
    private $equation;
    public function __construct()
    {
        $this->equation = Equation::find(1);

    }
    public function drawings()
    {
        $drawing=new Drawing;
        $drawing->setName('imagen');
        $drawing->setDescription('imagen');
        $drawing->setPath(public_path('storage/equation/LPXdrVjczCYtuwnKjodcRQscJAwufuq4qMMZibzT.jpg'));
        $drawing->setHeight(90);
        $drawing->setCoordinates('A10');
        return $drawing;
    }
    public function view():View{
        return view('equations.export',[
            'equation'=>$this->equation
        ]);
        
    }
}
