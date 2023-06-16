<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;
use Yajra\DataTables\DataTables;

class DatatableController extends Controller
{
    public function categoria(){
        $categorias = Categoria::orderBy('categoria_id','DESC')->get();

        return DataTables()->of($categorias)->toJson();

    }
}
