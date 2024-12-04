@extends('layouts.main')

@section('content')
<div class="container">
    <h1 class="text-center">Reporte de Productos de Baja Rotación</h1>

    <!-- Botones para exportar -->
    <!--<div class="mb-3 d-flex justify-content-end">-->
        <!-- Botón para exportar PDF -->
    <!--    <a href="{{ route('reportes.baja-rotacion-pdf') }}" class="btn btn-danger me-2">Exportar a PDF</a>-->
        <!-- Botón para exportar Excel -->
    <!--    <a href="{{ route('reportes.baja-rotacion-excel') }}" class="btn btn-success">Exportar a Excel</a>-->
    <!-- </div>-->

    <!-- Tabla de datos -->
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Descripción del Producto</th>
                <th>Total de Salidas</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($productosBajaRotacion as $producto)
                <tr>
                    <td>{{ $producto->Descripcion_PDT }}</td>
                    <td>{{ $producto->total_salidas }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="2" class="text-center">No hay productos de baja rotación.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
