<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;
use PDF;
use Carbon\Carbon;

class CategoriapdfController extends Controller
{
    public function pdf(){
        $date = Carbon::now();
        $date = $date->format('d-m-y');
        $hora = now()->isoFormat('H:mm:ss A');

        $categorias = Categoria::all();

        $pdf = PDF::loadView('categorias.pdf', compact('categorias', 'date', 'hora'));

        return $pdf->stream('categorias.pdf');
    }
}
