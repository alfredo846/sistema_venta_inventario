<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\DatatableController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('principal')->name('');
// });

//--------------------------Inicio-----------------------------------------
Route::view('/', 'inicio')->name('inicio');

//--------------------------Catálogos--------------------------------------
Route::resource('categorias', CategoriaController::class);
Route::get('datatable/categorias',[DatatableController::class, 'categoria'])->name('datatable.categoria');
Route::view('marca' , 'marca')->name('marca');
Route::view('empaque', 'empaque')->name('empaque');
Route::view('unidad_medida', 'unidad_medida')->name('unidad_medida');

// --------------------------Productos-------------------------------------
Route::view('producto', 'producto')->name('producto');
Route::view('existencia', 'existencia')->name('existencia');
Route::view('agotado', 'agotado')->name('agotado');
Route::view('poca_existencia', 'poca_existencia')->name('poca_existencia');
Route::view('sobreexistencia', 'sobreexistencia')->name('sobreexistencia');

// --------------------------Ventas-----------------------------------------
Route::view('venta', 'venta')->name('venta');
Route::view('nueva_venta', 'nueva_venta')->name('nueva_venta');
Route::view('consultar_venta', 'consultar_venta')->name('consultar_venta');
Route::view('reporte_venta', 'reporte_venta')->name('reporte_venta');

// --------------------------Compras-----------------------------------------
Route::view('compra', 'compra')->name('compra');
Route::view('nueva_compra', 'nueva_compra')->name('nueva_compra');
Route::view('consultar_compra', 'consultar_compra')->name('consultar_compra');
Route::view('reporte_compra', 'reporte_compra')->name('reporte_compra');

// --------------------------Inventario--------------------------------------
Route::view('inventario_inicial', 'inventario_inicial')->name('inventario_inicial');
Route::view('nuevo_inventario', 'nuevo_inventario')->name('nuevo_inventario');

// --------------------------Usuarios----------------------------------------
Route::view('usuario', 'usuario')->name('usuario');
Route::view('rol', 'rol')->name('rol');

// --------------------------Backup------------------------------------------
Route::view('backup', 'backup')->name('backup');


Route::view('forms', 'forms')->name('forms');





