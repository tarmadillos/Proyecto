@extends('layouts.main')

@section('content')
<div class="container">
    <h1 class="text-center">Reporte de Ventas</h1>
    <p>Rango: {{ $validated['fecha_inicio'] }} a {{ $validated['fecha_fin'] }}</p>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Descripción del Producto</th>
                <th>Fecha de Salida</th>
                <th>Cantidad</th>
                <th>Motivo</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($ventas as $venta)
                <tr>
                    <td>{{ $venta->Descripcion_PDT }}</td>
                    <td>{{ $venta->Fecha_Salida_SAL }}</td>
                    <td>{{ $venta->Cantidad_SAL }}</td>
                    <td>{{ $venta->Motivo_ENUM }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="4" class="text-center">No se encontraron ventas.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
