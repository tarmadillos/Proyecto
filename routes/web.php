<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\InventarioController;
use App\Http\Controllers\ProveedorController;
use App\Http\Controllers\ReporteController;
use App\Http\Controllers\ProyectoController;
use App\Http\Controllers\CategoriaController;

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

// Ruta para Control de Inventario
Route::get('/inventario', [InventarioController::class, 'index'])->name('inventario.index');

// Ruta para Reportes / Informes
Route::get('/reportes', [ReporteController::class, 'index'])->name('reportes.index');

// Ruta para Salir
Route::get('/salir', function () {
    return redirect('/'); // Regresa al inicio o implementa lógica de logout
})->name('menu.salir');



/*
Route::get('/', [ProductoController::class, 'index'])->name('productos.index');
Route::get('/productos/create', [ProductoController::class, 'create'])->name('productos.create');
Route::post('/productos', [ProductoController::class, 'store'])->name('productos.store');
Route::get('/productos/{producto}/edit', [ProductoController::class, 'edit'])->name('productos.edit');
Route::put('/productos/{producto}', [ProductoController::class, 'update'])->name('productos.update');
Route::delete('/productos/{producto}', [ProductoController::class, 'destroy'])->name('productos.destroy');
*/


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