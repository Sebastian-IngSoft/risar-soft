<?php

namespace App\Exports;

use App\Models\Equation;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class ReportExport implements FromView,ShouldAutoSize{

    use Exportable;
    private $equation;
    public function __construct()
    {
        $this->equation = Equation::find(1);
    }
    public function view():View{
        return view('equations.export',[
            'equation'=>$this->equation
        ]);
        
    }
}
