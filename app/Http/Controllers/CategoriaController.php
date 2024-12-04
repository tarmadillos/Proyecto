<?php

namespace App\Http\Controllers;

use App\Models\categoria;
use Illuminate\Http\Request;


class CategoriaController extends Controller
{
    public function index()
    {
        $categorias = Categoria::all();  // Obtener todas las categorías
        return view('categorias.index', compact('categorias'));
    }

    public function create()
    {
        return view('categorias.create');  // Mostrar formulario de creación
    }

    public function store(Request $request)
    {
        $request->validate([
            'Nombre_CAT' => 'required|string',
            'Descripcion_CAT' => 'required|string',
        ]);

        Categoria::create($request->all());  // Guardar la categoría
        return redirect()->route('categorias.index');
    }

    public function edit(Categoria $categoria)
    {
        return view('categorias.edit', compact('categoria'));  // Formulario de edición
    }

    public function update(Request $request, Categoria $categoria)
    {
        $request->validate([
            'Nombre_CAT' => 'required|string',
            'Descripcion_CAT' => 'required|string',
        ]);

        $categoria->update($request->all());  // Actualizar la categoría
        return redirect()->route('categorias.index');
    }

    public function destroy(Categoria $categoria)
    {
        $categoria->delete();  // Eliminar la categoría
        return redirect()->route('categorias.index');
    }
}



/*class CategoriaController extends Controller
{
    public function index()
    {
        $categorias = Categoria::all();
        return view('categorias.index', compact('categorias'));
    }

    public function create()
    {
        return view('categorias.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'Nombre_CAT' => 'required|string',
            'Descripcion_CAT' => 'required|text',
        ]);

       
        Categoria::create($request->all());
        return redirect()->route('categorias.index');
    }

    public function edit(Categoria $Categoria)
    {
        return view('categorias.edit', compact('Categoria'));
    }

    public function update(Request $request, Categoria $Categoria)
    {
        $request->validate([
            'Nombre_CAT' => 'required|string',
            'Descripcion_CAT' => 'required|text',
        ]);

        $Categoria->update($request->all());
        return redirect()->route('categorias.index');
    }

    public function destroy(Categoria $Categoria)
    {
        $Categoria->delete();
        return redirect()->route('categorias.index');
    }
}*/