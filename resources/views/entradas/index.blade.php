<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Productos</title>-->
    <!-- Bootstrap CSS -->
    <!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-4">
        <h1 class="text-center">Gestión de Productos</h1>
        <p class="text-center">Aquí puedes gestionar los productos.</p>
    </div>

    <a href="{{ url()->previous() }}" class="btn btn-animado">Regresar</button></a>
    <style>
        .btn-animado {
            background-color: #28a745;
            color: white;
            border: none;
            padding: 12px 24px;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
            position: relative;
            overflow: hidden;
            transition: background-color 0.3s ease;
        }

        .btn-animado::after {
            content: '';
            background: rgba(255, 255, 255, 0.5);
            position: absolute;
            top: 50%;
            left: 50%;
            width: 0;
            height: 0;
            border-radius: 50%;
            transform: translate(-50%, -50%);
            transition: all 0.6s ease;
    }

    .btn-animado:hover {
        background-color: #218838;
    }

    .btn-animado:active::after {
        width: 200px;
        height: 200px;
    }
    </style>

</body>
</html>-->


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

   
