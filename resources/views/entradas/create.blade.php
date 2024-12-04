@extends('layouts.main')

@section('title', 'Nueva Entrada')

@section('content')
    <h1>Nueva Entrada</h1>
    <form action="{{ route('entradas.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label for="ID_Producto" class="form-label">Producto</label>
            <select class="form-select" id="ID_Producto" name="ID_Producto" required>
                <option value="" disabled selected>Selecciona un producto</option>
                @foreach($productos as $producto)
                    <option value="{{ $producto->ID_Producto }}">{{ $producto->Descripcion_PDT }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="ID_Proveedor" class="form-label">Proveedor</label>
            <select class="form-select" id="ID_Proveedor" name="ID_Proveedor" required>
                <option value="" disabled selected>Selecciona un proveedor</option>
                @foreach($proveedores as $proveedor)
                    <option value="{{ $proveedor->ID_Proveedor }}">{{ $proveedor->Nombre_PVD }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="Cantidad_ENT" class="form-label">Cantidad</label>
            <input type="number" class="form-control" id="Cantidad_ENT" name="Cantidad_ENT" min="1" required>
        </div>

        <div class="mb-3">
            <label for="Fecha_Entrada_ENT" class="form-label">Fecha de Entrada</label>
            <input type="date" class="form-control" id="Fecha_Entrada_ENT" name="Fecha_Entrada_ENT" required>
        </div>

        <div class="mb-3">
            <label for="Numero_Factura_ENT" class="form-label">Número de Factura</label>
            <input type="text" class="form-control" id="Numero_Factura_ENT" name="Numero_Factura_ENT" maxlength="255" required>
        </div>

        <button type="submit" class="btn btn-primary">Guardar Entrada</button>
        <a href="{{ route('entradas.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
@endsection
