<?php

namespace App\Http\Controllers;

use App\Models\Salida;
use App\Models\Producto;
use Illuminate\Http\Request;

class SalidaController extends Controller
{
    public function index()
    {
        $salidas = Salida::with('producto')->get();
        return view('salidas.index', compact('salidas'));
    }

    public function create()
    {
        $productos = Producto::all();
        return view('salidas.create', compact('productos'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'ID_Producto' => 'required|exists:productos,ID_Producto',
            'Cantidad_SAL' => 'required|integer|min:1',
            'Fecha_Salida_SAL' => 'required|date',
            'Motivo_ENUM' => 'required|in:Venta,Donación,Desperdicio,Otro',
        ]);

        Salida::create($request->all());

        return redirect()->route('salidas.index')->with('success', 'Salida registrada exitosamente.');
    }

    public function show(Salida $salida)
    {
        return view('salidas.show', compact('salida'));
    }

    public function edit(Salida $salida)
    {
        $productos = Producto::all();
        return view('salidas.edit', compact('salida', 'productos'));
    }

    public function update(Request $request, Salida $salida)
    {
        $request->validate([
            'ID_Producto' => 'required|exists:productos,ID_Producto',
            'Cantidad_SAL' => 'required|integer|min:1',
            'Fecha_Salida_SAL' => 'required|date',
            'Motivo_ENUM' => 'required|in:Venta,Donación,Desperdicio,Otro',
        ]);

        $salida->update($request->all());

        return redirect()->route('salidas.index')->with('success', 'Salida actualizada exitosamente.');
    }

    public function destroy(Salida $salida)
    {
        $salida->delete();

        return redirect()->route('salidas.index')->with('success', 'Salida eliminada exitosamente.');
    }
}