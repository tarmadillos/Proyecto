@extends('layouts.main')

@section('title', 'Editar Entrada')

@section('content')
    <h1>Editar Entrada</h1>

    <form action="{{ route('entradas.update', $entrada) }}" method="POST" class="mt-4">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="ID_Producto" class="form-label">Producto</label>
            <select class="form-select" id="ID_Producto" name="ID_Producto" required>
                @foreach($productos as $producto)
                    <option value="{{ $producto->ID_Producto }}" {{ $producto->ID_Producto == $entrada->ID_Producto ? 'selected' : '' }}>
                        {{ $producto->Descripcion_PDT }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="ID_Proveedor" class="form-label">Proveedor</label>
            <select class="form-select" id="ID_Proveedor" name="ID_Proveedor" required>
                @foreach($proveedores as $proveedor)
                    <option value="{{ $proveedor->ID_Proveedor }}" {{ $proveedor->ID_Proveedor == $entrada->ID_Proveedor ? 'selected' : '' }}>
                        {{ $proveedor->Nombre_PVD }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="Cantidad_ENT" class="form-label">Cantidad</label>
            <input type="number" class="form-control" id="Cantidad_ENT" name="Cantidad_ENT" value="{{ $entrada->Cantidad_ENT }}" required>
        </div>

        <div class="mb-3">
            <label for="Fecha_Entrada_ENT" class="form-label">Fecha de Entrada</label>
            <input type="date" class="form-control" id="Fecha_Entrada_ENT" name="Fecha_Entrada_ENT" value="{{ $entrada->Fecha_Entrada_ENT }}" required>
        </div>

        <div class="mb-3">
            <label for="Numero_Factura_ENT" class="form-label">Número de Factura</label>
            <input type="text" class="form-control" id="Numero_Factura_ENT" name="Numero_Factura_ENT" value="{{ $entrada->Numero_Factura_ENT }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Actualizar Entrada</button>
        <a href="{{ route('entradas.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
@endsection