<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;
use App\Http\Requests\Categorias\CategoriaCreateRequest;
use App\Http\Requests\Categorias\CategoriaEditRequest;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categorias = Categoria::orderBy('categoria_id', 'DESC')->get();
        return view('categorias.index')->with(['categorias' => $categorias]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('categorias.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $campos = [
            'nombre' => 'required',
        ];
        $mensajes = [
            'nombre.required' => 'El nombre es requerido',
        ];
        $validator = Validator::make($request->all(), $campos, $mensajes);
        if ($validator->fails()) {
            $errors = $validator->errors();
            return response()->json([
                'nombre' => $errors->get('nombre'),
                'alerta' => 'danger',
            ]);
        }

        $imagen2 = 'shadow.jpg';
        $newCategoria = Categoria::create($request->all());

        if ($request->hasFile('imagen')) {
            $newCategoria->imagen = Storage::disk('categoria-imagenes')->put('', $request->file('imagen'));
        } else {
            $newCategoria->imagen = $imagen2;
        }
        $newCategoria->save();

        return response()->json([
            'alerta'  => 'success',
        ]);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function show(Categoria $categoria)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function edit(Categoria $categoria)
    {
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function update(CategoriaEditRequest $request, Categoria $categoria)
    {
        $categoria->update($request->except('categoria_id', 'imagen'));

        if ($request->hasFile('imagen')) {
            if (Storage::disk('categoria-imagenes')->exists("$categoria->imagen")) {
                if ($categoria->imagen == 'shadow.jpg') {
                    $categoria->imagen = 'shadow.jpg';
                } else {
                    Storage::disk('categoria-imagenes')->delete("$categoria->imagen");
                }
            }
            $categoria->imagen = Storage::disk('categoria-imagenes')->put('', $request->file('imagen'));
        }

       

        $categoria->save();

        return redirect()
            ->route('categorias.index')
            ->with('message', '¡ Registro actualizado exitosamente !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function destroy(Categoria $categoria)
    {
        //
    }
}
