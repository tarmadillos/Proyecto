<?php

namespace App\Http\Controllers;

use App\Models\producto;
use Illuminate\Http\Request;


class ProductoController extends Controller
{
    public function index()
    {
        $productos = Producto::all();
        return view('productos.index', compact('productos'));
    }

    public function create()
    {
        return view('productos.create');
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

        Producto::create($request->all());
        return redirect()->route('productos.index');
    }

    public function edit(Producto $producto)
    {
        return view('productos.edit', compact('producto'));
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
        return redirect()->route('productos.index');
    }

    public function destroy(Producto $producto)
    {
        $producto->delete();
        return redirect()->route('productos.index');
    }
}
