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
        $proveedores = Proveedor::all();
        return view('proveedores.create'); // Mostrar formulario de creación
    }

    public function store(Request $request)
    {
        $request->validate([

           'Nombre_PVD' => 'required|string',
           'Contacto_PVD' => 'required|string',
           'Telefono_PVD' => 'required|string',
           'Email_PVD' =>'required|string',
           
        ]);

        proveedor::create($request->all()); // Guardar el proveedor
        return redirect()->route('proveedores.index');
    }

    public function edit(proveedor $proveedor)
    {
        //$proveedor = proveedor::findOrFail($id); // Encuentra el producto por su ID
        //$proveedores = Proveedor::all();
        return view('proveedores.edit', compact('proveedor'));
    }

    public function update(Request $request, Proveedor $proveedor)
    {
        $request->validate([
            'Nombre_PVD' => 'required|string',
            'Contacto_PVD' => 'required|string',
            'Telefono_PVD' => 'required|string',
            'Email_PVD' =>'required|string',
        ]);

        // $proveedor = Proveedor::findOrFail($id);
        /*$proveedor->update([
            'Nombre_PVD' => $request->Nombre_PVD,
            'Contacto_PVD' => $request->Contacto_PVD,
            'Telefono_PVD' => $request->Telefono_PVD,
            'Email_PVD' => $request->Email_PVD,
        ]);*/

        $proveedor->update($request->all());
        return redirect()->route('proveedores.index')->with('success', 'Proveedor actualizado correctamente');
     
    }

    public function destroy(proveedor $proveedor)
    {
        $proveedor->delete();
        return redirect()->route('proveedores.index');
    }
}
