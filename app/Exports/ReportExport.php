<?php

namespace App\Exports;

use App\Models\Equation;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithDrawings;
use PhpOffice\PhpSpreadsheet\Worksheet\Drawing;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use Maatwebsite\Excel\Concerns\WithStyles;

class ReportExport implements FromView,ShouldAutoSize,/*WithDrawings,*/WithStyles
{

    use Exportable;
    private $id;
    public function __construct($ideq)
    {
        //para que sepa que equation exportar
        $this->id = $ideq;

    }

    public function styles(Worksheet $sheet){
        //poniendo bordes
        $sheet->getStyle('A2:M38')->applyFromArray([
            'borders'=>[
                'allBorders'=>[
                    'borderStyle'=>'thin',
                ],
            ],
        ]);

    }
    /*public function drawings()
    {  
        //dibuja segun cordenadas, solo lo que se pasa al return
        $drawing=new Drawing;
        $drawing->setName('imagen');
        $drawing->setDescription('imagen');
        $drawing->setPath(public_path('storage/equation/LPXdrVjczCYtuwnKjodcRQscJAwufuq4qMMZibzT.jpg'));
        $drawing->setHeight(90);
        $drawing->setCoordinates('A10');
        return $drawing;
    }*/
    public function view():View{
        //dirige al view la plantilla original que se exportara acepta css en redimencion de tamaños y backgroud, se sigue descubriendo
        $equation = Equation::find($this->id);
        return view('reports.excel',compact('equation'));
    }

}
