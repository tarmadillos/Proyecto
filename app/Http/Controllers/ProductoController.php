<?php
/*
namespace App\Http\Controllers;

use App\Models\producto;
use App\Models\proveedor;
use App\Models\categoria;
use Illuminate\Http\Request;

class ProductoController extends Controller

{
    public function index()
    {
        $productos = producto::all();
        //$productos = producto::with(['categoria', 'proveedor'])->get();
        return view('productos.index', compact('productos'));
    }

    public function create()
    {
        //$categorias = categoria::all();
        //$proveedores = Proveedor::all();
        $productos = Producto::all();
        return view('productos.create');  // Mostrar formulario de creación
    }

    public function store(Request $request)
    {
        $request->validate([
            'Descripcion_PDT' => 'required|string',
            'ID_Categoria' => 'required|exists:categorias,id',
            'ID_Proveedor' => 'required|exists:proveedores,id',
            'Precio_Compra_PDT' => 'required|numeric',
            'Precio_Venta_PDT' => 'required|numeric',
            'Stock_Minimo_PDT' => 'required|integer',
            'Imagen_PDT' => 'nullable|image|max:2048',
        ]);

        // Manejar la carga de la imagen
        if ($request->hasFile('Imagen_PDT')) {
            $path = $request->file('Imagen_PDT')->store('public/imagenes');
            $request['Imagen_PDT'] = $path;
        }

        Producto::create($request->all()); // Guardar el producto
        return redirect()->route('productos.index');
    }

    public function edit(Producto $producto)
    {
        $producto = Producto::findOrFail($id); // Encuentra el producto por su ID
        $categorias = categoria::all();
        $proveedores = Proveedor::all();
        return view('productos.edit', compact('producto', 'categorias', 'proveedores'));
    }

    public function update(Request $request, Producto $producto)
    {
        $request->validate([
            'Descripcion_PDT' => 'required|string',
            'ID_Categoria' => 'required|exists:categorias,id',
            'ID_Proveedor' => 'required|exists:proveedores,id',
            'Precio_Compra_PDT' => 'required|numeric',
            'Precio_Venta_PDT' => 'required|numeric',
            'Stock_Minimo_PDT' => 'required|integer',
            'Imagen_PDT' => 'nullable|image|max:2048',
        ]);

        if ($request->hasFile('Imagen_PDT')) {
            $path = $request->file('Imagen_PDT')->store('public/imagenes');
            $request['Imagen_PDT'] = $path;
        }

        $producto->update($request->all());
        return redirect()->route('productos.index')->with('success', 'Proveedor actualizado correctamente');
    }

    public function destroy(Producto $producto)
    {
        $producto->delete();
        return redirect()->route('productos.index');
    }
}*/


//<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use App\Models\Categoria;
use App\Models\Proveedor;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function index()
    {
        $productos = Producto::with(['categoria', 'proveedor'])->get();
        return view('productos.index', compact('productos'));
    }

    public function create()
    {
        $categorias = Categoria::all();
        $proveedores = Proveedor::all();
        return view('productos.create', compact('categorias', 'proveedores'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'Descripcion_PDT' => 'required|string|max:255',
            'ID_Categoria' => 'required|exists:categorias,ID_Categoria',
            'ID_Proveedor' => 'required|exists:proveedores,ID_Proveedor',
            'Precio_Compra_PDT' => 'required|numeric|min:0',
            'Precio_Venta_PDT' => 'required|numeric|min:0',
            'Stock_Minimo_PDT' => 'required|integer|min:0',
            'Imagen_PDT' => 'nullable|image|max:2048',
        ]);

        if ($request->hasFile('Imagen_PDT')) {
            $validatedData['Imagen_PDT'] = $request->file('Imagen_PDT')->store('productos', 'public');
        }

        Producto::create($validatedData);

        return redirect()->route('productos.index')->with('success', 'Producto agregado correctamente');
    }

    public function edit($id)
    {
        $producto = Producto::findOrFail($id);
        $categorias = Categoria::all();
        $proveedores = Proveedor::all();
        return view('productos.edit', compact('producto', 'categorias', 'proveedores'));
    }

    public function update(Request $request, $id)
    {
        $producto = Producto::findOrFail($id);

        $validatedData = $request->validate([
            'Descripcion_PDT' => 'required|string|max:255',
            'ID_Categoria' => 'required|exists:categorias,ID_Categoria',
            'ID_Proveedor' => 'required|exists:proveedores,ID_Proveedor',
            'Precio_Compra_PDT' => 'required|numeric|min:0',
            'Precio_Venta_PDT' => 'required|numeric|min:0',
            'Stock_Minimo_PDT' => 'required|integer|min:0',
            'Imagen_PDT' => 'nullable|image|max:2048',
        ]);

        if ($request->hasFile('Imagen_PDT')) {
            $validatedData['Imagen_PDT'] = $request->file('Imagen_PDT')->store('productos', 'public');
        }

        $producto->update($validatedData);

        return redirect()->route('productos.index')->with('success', 'Producto actualizado correctamente');
    }

    public function destroy($id)
    {
        $producto = Producto::findOrFail($id);
        $producto->delete();
        return redirect()->route('productos.index')->with('success', 'Producto eliminado correctamente');
    }
}
