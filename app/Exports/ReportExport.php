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

class ReportExport implements FromView,ShouldAutoSize,WithDrawings,WithStyles
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
        $sheet->getStyle('A2:M47')->applyFromArray([
            'borders'=>[
                'allBorders'=>[
                    'borderStyle'=>'thin',
                ],
            ],
        ]);

    }
    public function drawings()
    {  
        $equation = Equation::find($this->id);
        //insertando logo
        $logo= new Drawing;
        $logo->setName('logo');
        $logo->setDescription('logo');
        $logo->setPath(public_path('/storage/client/entel.jpeg'));
        $logo->setHeight(80);
        $logo->setCoordinates('A2');

        //isertando 4 fotos panoramicas
        $drawing1=new Drawing;
        $drawing1->setName('panoramica1');
        $drawing1->setDescription('panoramica1');
        $drawing1->setPath(public_path($equation->images[0]->url));
        $drawing1->setHeight(390);
        $drawing1->setCoordinates('D23');

        $drawing2=new Drawing;
        $drawing2->setName('panoramica2');
        $drawing2->setDescription('panoramica2');
        $drawing2->setPath(public_path($equation->images[1]->url));
        $drawing2->setHeight(390);
        $drawing2->setCoordinates('J23');

        $drawing3=new Drawing;
        $drawing3->setName('panoramica3');
        $drawing3->setDescription('panoramica3');
        $drawing3->setPath(public_path($equation->images[2]->url));
        $drawing3->setHeight(390);
        $drawing3->setCoordinates('D24');

        $drawing4=new Drawing;
        $drawing4->setName('panoramica4');
        $drawing4->setDescription('panoramica4');
        $drawing4->setPath(public_path($equation->images[3]->url));
        $drawing4->setHeight(390);
        $drawing4->setCoordinates('J24');
               
        //insertando 6 fotos de item
        $drawing5=new Drawing;
        $drawing5->setName('item1');
        $drawing5->setDescription('item1');
        $drawing5->setPath(public_path($equation->images[4]->url));
        $drawing5->setHeight(190);
        $drawing5->setCoordinates('B37');
                
        $drawing6=new Drawing;
        $drawing6->setName('item2');
        $drawing6->setDescription('item2');
        $drawing6->setPath(public_path($equation->images[5]->url));
        $drawing6->setHeight(190);
        $drawing6->setCoordinates('I37');
                
        $drawing7=new Drawing;
        $drawing7->setName('item3');
        $drawing7->setDescription('item3');
        $drawing7->setPath(public_path($equation->images[6]->url));
        $drawing7->setHeight(190);
        $drawing7->setCoordinates('B41');
                 
        $drawing8=new Drawing;
        $drawing8->setName('item4');
        $drawing8->setDescription('item4');
        $drawing8->setPath(public_path($equation->images[7]->url));
        $drawing8->setHeight(190);
        $drawing8->setCoordinates('I41');         
                 
        $drawing9=new Drawing;
        $drawing9->setName('item5');
        $drawing9->setDescription('item5');
        $drawing9->setPath(public_path($equation->images[8]->url));
        $drawing9->setHeight(190);
        $drawing9->setCoordinates('B45'); 
                 
        $drawing10=new Drawing;
        $drawing10->setName('item6');
        $drawing10->setDescription('item6');
        $drawing10->setPath(public_path($equation->images[9]->url));
        $drawing10->setHeight(190);
        $drawing10->setCoordinates('I45'); 

        return [$logo,$drawing1,$drawing2,$drawing3,$drawing4,$drawing5,$drawing6,$drawing7,$drawing8,$drawing9,$drawing10];
    }
    public function view():View{
        //dirige al view la plantilla original que se exportara acepta css en redimencion de tamaños y backgroud, se sigue descubriendo
        $equation = Equation::find($this->id);
        return view('reports.excel',compact('equation'));
    }

}
