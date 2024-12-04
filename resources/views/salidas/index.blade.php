@extends('layouts.main')

@section('title', 'Salidas')

@section('content')
<div class="container mt-4">
    <h1 class="text-center">Lista de Salidas de Material</h1>
    <a href="{{ route('salidas.create') }}" class="btn btn-primary mb-3">Registrar Salida</a>

    <table class="table table-striped">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Producto</th>
                <th>Cantidad</th>
                <th>Fecha</th>
                <th>Motivo</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($salidas as $salida)
            <tr>
                <td>{{ $salida->ID_Salida }}</td>
                <td>{{ $salida->producto->Descripcion_PDT }}</td>
                <td>{{ $salida->Cantidad_SAL }}</td>
                <td>{{ $salida->Fecha_Salida_SAL }}</td>
                <td>{{ $salida->Motivo_ENUM }}</td>
                <td>
                    <a href="{{ route('salidas.edit', $salida->ID_Salida) }}" class="btn btn-warning btn-sm">Editar</a>
                    <form action="{{ route('salidas.destroy', $salida->ID_Salida) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection