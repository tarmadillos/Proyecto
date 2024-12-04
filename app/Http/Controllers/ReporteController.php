<?php

namespace App\Http\Controllers;

use App\Models\inventario;
use App\Models\entrada;
use App\Models\Salida;
use App\Models\producto;
use App\Models\reporte;
use Illuminate\Http\Request;

use Barryvdh\DomPDF\Facade as PDF;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\ProductosBajaRotacionExport;


class ReporteController extends Controller
{

    /*{
        return view('reportes.index'); // Carga la vista de productos
    }*/
public function reporteBajaRotacion()
{
    // Determina el rango de tiempo, por ejemplo, el último mes
    $inicio = now()->subMonth();
    $fin = now();

    // Consulta los productos con salidas menores a un umbral
    $productosBajaRotacion = \DB::table('productos')
        ->leftJoin('salidas', 'productos.ID_Producto', '=', 'salidas.ID_Producto')
        ->select('productos.Descripcion_PDT', \DB::raw('SUM(salidas.Cantidad_SAL) as total_salidas'))
        ->whereBetween('salidas.Fecha_Salida_SAL', [$inicio, $fin])
        ->groupBy('productos.ID_Producto', 'productos.Descripcion_PDT')
        ->havingRaw('SUM(salidas.Cantidad_SAL) < ?', [10]) // Umbral para baja rotación
        ->get();

    return view('reportes.baja_rotacion', compact('productosBajaRotacion'));
}

public function reporteVentas()
{
    return view('reportes.ventas');
}

public function generarReporteVentas(Request $request)
{
    $validated = $request->validate([
        'fecha_inicio' => 'required|date',
        'fecha_fin' => 'required|date|after_or_equal:fecha_inicio',
    ]);

    // Consulta las ventas dentro del rango
    $ventas = \DB::table('salidas')
        ->join('productos', 'salidas.ID_Producto', '=', 'productos.ID_Producto')
        ->select(
            'productos.Descripcion_PDT',
            'salidas.Fecha_Salida_SAL',
            'salidas.Cantidad_SAL',
            'salidas.Motivo_ENUM'
        )
        ->whereBetween('salidas.Fecha_Salida_SAL', [$validated['fecha_inicio'], $validated['fecha_fin']])
        ->get();

    return view('reportes.ventas_resultado', compact('ventas', 'validated'));
}

public function reporteInventario()
{
    // Consulta los datos del inventario actual
    $inventario = \DB::table('productos')
        ->select('Descripcion_PDT', 'Stock_Minimo_PDT', 'Precio_Compra_PDT', 'Precio_Venta_PDT', 'Imagen_PDT')
        ->get();

    return view('reportes.inventario', compact('inventario'));
}



public function exportarBajaRotacionPDF()
{
    $inicio = now()->subMonth();
    $fin = now();

    $productosBajaRotacion = \DB::table('productos')
        ->leftJoin('salidas', 'productos.ID_Producto', '=', 'salidas.ID_Producto')
        ->select('productos.Descripcion_PDT', \DB::raw('SUM(salidas.Cantidad_SAL) as total_salidas'))
        ->whereBetween('salidas.Fecha_Salida_SAL', [$inicio, $fin])
        ->groupBy('productos.ID_Producto', 'productos.Descripcion_PDT')
        ->havingRaw('SUM(salidas.Cantidad_SAL) < ?', [10])
        ->get();

    $pdf = PDF::loadView('reportes.baja_rotacion_pdf', compact('productosBajaRotacion'));

    return $pdf->download('reporte_baja_rotacion.pdf');
}



public function exportarBajaRotacionExcel()
{
    return Excel::download(new ProductosBajaRotacionExport, 'reporte_baja_rotacion.xlsx');
}


}
