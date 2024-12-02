<?php

namespace App\Http\Controllers;

use App\Models\proveedor;
use Illuminate\Http\Request;

class ProveedorController extends Controller

{
    public function index()
    {
        $proveedores = proveedor::all();
        return view('proveedores.index', compact('proveedores'));
    }

    public function create()
    {
        return view('proveedores.create');
    }

    public function store(Request $request)
    {
        $request->validate([

           'Nombre_PVD' => 'required|string',
           'Contacto_PVD' => 'required|string',
           'Telefono_PVD' => 'required|string',
           'Email_PVD' =>'required|string',
           
        ]);

        proveedor::create($request->all());
        return redirect()->route('proveedores.index');
    }

    public function edit(proveedor $proveedor)
    {
        return view('proveedores.edit', compact('proveedor'));
    }

    public function update(Request $request, proveedor $proveedor)
    {
        $request->validate([
            'Nombre_PVD' => 'required|string',
            'Contacto_PVD' => 'required|string',
            'Telefono_PVD' => 'required|string',
            'Email_PVD' =>'required|string',
        ]);


        $proveedor->update($request->all());
        return redirect()->route('proveedores.index');
    }

    public function destroy(proveedor $proveedor)
    {
        $proveedor->delete();
        return redirect()->route('proveedores.index');
    }
}
