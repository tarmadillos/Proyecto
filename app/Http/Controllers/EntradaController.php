<?php

namespace App\Http\Controllers;

use App\Models\entrada;
use App\Models\producto;
use App\Models\proveedor;
use Illuminate\Http\Request;

class EntradaController extends Controller

{
    public function index()
    {
        $entradas = Entrada::with(['producto', 'proveedor'])->get();
        return view('entradas.index', compact('entradas'));
    }

    public function create()
    {
        $productos = Producto::all();
        $proveedores = Proveedor::all();
        return view('entradas.create', compact('productos', 'proveedores'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'ID_Producto' => 'required|exists:productos,ID_Producto',
            'ID_Proveedor' => 'required|exists:proveedores,ID_Proveedor',
            'Cantidad_ENT' => 'required|integer|min:1',
            'Fecha_Entrada_ENT' => 'required|date',
            'Numero_Factura_ENT' => 'required|string|max:255',
        ]);

        Entrada::create($request->all());

        return redirect()->route('entradas.index')->with('success', 'Entrada creada exitosamente.');
    }

    public function edit(Entrada $entrada)
    {
        $productos = Producto::all();
        $proveedores = Proveedor::all();
        return view('entradas.edit', compact('entrada', 'productos', 'proveedores'));
    }

    public function update(Request $request, Entrada $entrada)
    {
        $request->validate([
            'ID_Producto' => 'required|exists:productos,ID_Producto',
            'ID_Proveedor' => 'required|exists:proveedores,ID_Proveedor',
            'Cantidad_ENT' => 'required|integer|min:1',
            'Fecha_Entrada_ENT' => 'required|date',
            'Numero_Factura_ENT' => 'required|string|max:255',
        ]);

        $entrada->update($request->all());

        return redirect()->route('entradas.index')->with('success', 'Entrada actualizada exitosamente.');
    }

    public function destroy(Entrada $entrada)
    {
        $entrada->delete();
        return redirect()->route('entradas.index')->with('success', 'Entrada eliminada exitosamente.');
    }

}