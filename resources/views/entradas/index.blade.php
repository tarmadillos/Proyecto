@extends('layouts.main')

@section('title', 'Lista de Entradas de Material')

@section('content')
    <div class="d-flex justify-content-between align-items-center">
        <h1>Entradas de Material</h1>
        <a href="{{ route('entradas.create') }}" class="btn btn-success">Nueva Entrada</a>
    </div>
    <table class="table mt-4">  <!-- <table class="table table-bordered table-striped"> -->
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Producto</th>
                <th>Proveedor</th>
                <th>Cantidad</th>
                <th>Fecha</th>
                <th>Factura</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @forelse($entradas as $entrada)
                <tr>
                    <td>{{ $entrada->ID_Entrada }}</td>
                    <td>{{ $entrada->producto->Descripcion_PDT ?? 'Sin Producto' }}</td>
                    <td>{{ $entrada->proveedor->nombre ?? 'Sin Proveedor' }}</td>
                    <td>{{ $entrada->Cantidad_ENT }}</td>
                    <td>{{ $entrada->Fecha_Entrada_ENT }}</td>
                    <td>{{ $entrada->Numero_Factura_ENT }}</td>
                    <td>
                        <a href="{{ route('entradas.edit', $entrada) }}" class="btn btn-warning btn-sm">Editar</a>
                        <form action="{{ route('entradas.destroy', $entrada) }}" method="POST" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="7" class="text-center">No hay entradas registradas.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
    @endsection

   
