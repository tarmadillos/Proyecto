<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InventarioController;
use App\Http\Controllers\ProyectoController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\ProveedorController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\EntradaController;
use App\Http\Controllers\SalidaController;
use App\Http\Controllers\ReporteController;

Route::resource('entradas', EntradaController::class);

/*Route::get('/', function () {
    return view('welcome');
});*/

//vista blade principal
/*Route::get('/', function () {
    return view('principal');
});*/

//vista productos con nombre de envio
/*Route::get('/', function () {
    $nombre_Persona = 'Juan';
    return view('productos', ['nombre' => $nombre_Persona]);
});*/

// Ruta para Inicio
/*Route::get('/', function () {
    return view('inicio'); // Crea una vista inicio.blade.php
})->name('inicio');*/

//vista del menu
Route::get('/', function () {
    return view('menu');
});

// Ruta para Inicio
Route::get('/proyecto', [ProyectoController::class, 'index'])->name('proyecto.index');

// Ruta para Gestión de Proveedores
Route::get('/proveedores', [ProveedorController::class, 'index'])->name('proveedores.index');

// Ruta para Gestión de Productos
Route::get('/productos', [ProductoController::class, 'index'])->name('productos.index');

// Ruta para Categorias
Route::get('/categorias', [CategoriaController::class, 'index'])->name('categoria.index');

// Ruta para Entradas
Route::get('/entradas', [EntradaController::class, 'index'])->name('entradas.index');
Route::resource('entradas', EntradaController::class);

Route::get('/salidas', [EntradaController::class, 'index'])->name('entradas.index');
Route::resource('salidas', EntradaController::class);

// Ruta para Control de Inventario
Route::get('/inventario', [InventarioController::class, 'index'])->name('inventario.index');//

// Ruta para Reportes / Informes
Route::get('/reportes', [ReporteController::class, 'index'])->name('reportes.index');


// Ruta para Salir
Route::get('/salir', function () {
    return redirect('/'); // Regresa al inicio o implementa lógica de logout
})->name('menu.salir');



Route::get('/productos', [ProductoController::class, 'index'])->name('productos.index');
Route::get('/productos/create', [ProductoController::class, 'create'])->name('productos.create');
Route::post('/productos', [ProductoController::class, 'store'])->name('productos.store');
Route::get('/productos/{producto}/edit', [ProductoController::class, 'edit'])->name('productos.edit');
Route::put('/productos/{producto}', [ProductoController::class, 'update'])->name('productos.update');
Route::delete('/productos/{producto}', [ProductoController::class, 'destroy'])->name('productos.destroy');

//Route::resource('categoria', CategoriaController::class);
Route::get('/categorias', [CategoriaController::class, 'index'])->name('categorias.index');
Route::get('/categorias/create', [CategoriaController::class, 'create'])->name('categorias.create');
Route::post('/categorias', [CategoriaController::class, 'store'])->name('categorias.store');
Route::get('/categorias/{categoria}/edit', [CategoriaController::class, 'edit'])->name('categorias.edit');
Route::put('/categorias/{categoria}', [CategoriaController::class, 'update'])->name('categorias.update');
Route::delete('/categorias/{categoria}', [CategoriaController::class, 'destroy'])->name('categorias.destroy');

Route::get('/proveedores', [ProveedorController::class, 'index'])->name('proveedores.index');
Route::get('/proveedores/create', [ProveedorController::class, 'create'])->name('proveedores.create');
Route::post('/proveedores', [ProveedorController::class, 'store'])->name('proveedores.store');
Route::get('/proveedores/{proveedor}/edit', [ProveedorController::class, 'edit'])->name('proveedores.edit');
Route::put('/proveedores/{proveedor}', [ProveedorController::class, 'update'])->name('proveedores.update');
Route::delete('/proveedores/{proveedor}', [ProveedorController::class, 'destroy'])->name('proveedores.destroy');

Route::get('/entradas', [EntradaController::class, 'index'])->name('entradas.index');
Route::get('/entradas/create', [EntradaController::class, 'create'])->name('entradas.create');
Route::post('/entradas', [EntradaController::class, 'store'])->name('entradas.store');
Route::get('/entradas/{entrada}/edit', [EntradaController::class, 'edit'])->name('entradas.edit');
Route::put('/entradas/{entrada}', [EntradaController::class, 'update'])->name('entradas.update');
Route::delete('/entradas/{entrada}', [EntradaController::class, 'destroy'])->name('entradas.destroy');

Route::get('/salidas', [SalidaController::class, 'index'])->name('salidas.index');
Route::get('/salidas/create', [SalidaController::class, 'create'])->name('salidas.create');
Route::post('/salidas', [SalidaController::class, 'store'])->name('salidas.store');
Route::get('/salidas/{salida}/edit', [SalidaController::class, 'edit'])->name('salidas.edit');
Route::put('/salidas/{salida}', [SalidaController::class, 'update'])->name('salidas.update');
Route::delete('/salidas/{salida}', [SalidaController::class, 'destroy'])->name('salidas.destroy');


Route::get('reportes/baja-rotacion', [ReporteController::class, 'reporteBajaRotacion'])->name('reportes.baja-rotacion');
Route::get('reportes/ventas', [ReporteController::class, 'reporteVentas'])->name('reportes.ventas');
Route::post('reportes/ventas', [ReporteController::class, 'generarReporteVentas'])->name('reportes.generar-ventas');
Route::get('reportes/inventario', [ReporteController::class, 'reporteInventario'])->name('reportes.inventario');

Route::get('reportes/baja-rotacion/pdf', [ReporteController::class, 'exportarBajaRotacionPDF'])->name('reportes.baja-rotacion-pdf');
Route::get('reportes/baja-rotacion/excel', [ReporteController::class, 'exportarBajaRotacionExcel'])->name('reportes.baja-rotacion-excel');
