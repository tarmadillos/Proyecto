<?php

namespace App\Http\Controllers;

use App\Models\reporte;
use Illuminate\Http\Request;

class ReporteController extends Controller
{
    public function index()
    {
        return view('reportes.index'); // Carga la vista de productos
    }
}
