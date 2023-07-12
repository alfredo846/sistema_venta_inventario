<?php

namespace App\Exports;

use App\Models\Categoria;
use Maatwebsite\Excel\Concerns\FromView;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
Use Maatwebsite\Excel\Concerns\WithDrawings;
use PhpOffice\PhpSpreadsheet\Worksheet\Drawing;
use Carbon\Carbon;

class CategoriasExport implements FromView, ShouldAutoSize, WithDrawings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function view(): View
    {
        return view('categorias.export_excel', [
            'categorias' => Categoria::orderBy('categoria_id','ASC')->get(),
            'date'       => Carbon::now()
        ]);
    }

    public function drawings()
    {
        $drawing = new Drawing();
        $drawing->setName('Logo');
        $drawing->setDescription('This is my logo');
        $drawing->setPath(public_path('/img/invoice-logo.png'));
        $drawing->setHeight(50);
        $drawing->setCoordinates('D2');

        return $drawing;
    }
}
