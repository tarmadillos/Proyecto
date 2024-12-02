<?php

namespace App\Http\Controllers;

use App\Models\proyecto;
use Illuminate\Http\Request;

class ProyectoController extends Controller
{
    public function index()
    {
        return view('proyecto.index'); // Carga la vista de proyecto
    }
}
