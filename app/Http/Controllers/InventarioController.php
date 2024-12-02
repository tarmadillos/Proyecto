<?php

namespace App\Http\Controllers;

use App\Models\inventario;
use Illuminate\Http\Request;

class InventarioController extends Controller
{
    public function index()
    {
        return view('inventario.index'); // Carga la vista de productos
    }
}
