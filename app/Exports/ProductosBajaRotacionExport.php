<?php

namespace App\Exports;

namespace App\Exports;

use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ProductosBajaRotacionExport implements FromCollection, WithHeadings
{
    public function collection()
    {
        $inicio = now()->subMonth();
        $fin = now();

        return DB::table('productos')
            ->leftJoin('salidas', 'productos.ID_Producto', '=', 'salidas.ID_Producto')
            ->select('productos.Descripcion_PDT', DB::raw('SUM(salidas.Cantidad_SAL) as total_salidas'))
            ->whereBetween('salidas.Fecha_Salida_SAL', [$inicio, $fin])
            ->groupBy('productos.ID_Producto', 'productos.Descripcion_PDT')
            ->havingRaw('SUM(salidas.Cantidad_SAL) < ?', [10])
            ->get();
    }

    public function headings(): array
    {
        return ['Producto', 'Total Salidas'];
    }
}

