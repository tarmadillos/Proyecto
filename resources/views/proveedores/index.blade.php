<!--<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Proveedores</title> -->
    <!-- Bootstrap CSS -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-4">
        <h1 class="text-center">Gestión de Proveedores</h1>
        <p class="text-center">Aquí puedes gestionar los proveedores.</p>
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
</html> -->



@extends('layouts.main')

@section('title', 'Gestión de Proveedores')

@section('content')
    <div class="d-flex justify-content-between align-items-center">
        <h1>Gestión de Proveedores</h1>
        <a href="{{ route('proveedores.create') }}" class="btn btn-primary">Agregar Proveedor</a>
    </div>
    <table class="table mt-3">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Contacto</th>
                <th>Telefono</th>
                <th>Email</th>
        </thead>
        <tbody>
            @foreach($proveedores as $proveedores)
                <tr>
                    <td>{{ $proveedores->ID_Proveedor }}</td>
                    <td>{{ $proveedores->Nombre_PVD }}</td>
                    <td>{{ $proveedores->Contacto_PVD }}</td>
                    <td>{{ $proveedores->Telefono_PVDContacto_PVD }}</td>
                    <td>{{ $proveedores->Email_PVD }}</td>
                    <td>
                        <a href="{{ route('proveedores.edit', $proveedores) }}" class="btn btn-warning btn-sm">Editar</a>
                        <form action="{{ route('proveedores.destroy', $proveedores) }}" method="POST" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
