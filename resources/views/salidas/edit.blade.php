@extends('layouts.main')

@section('title', 'Editar salida')

@section('content')
    <h1>Editar salida</h1>

    <form action="{{ route('salidas.update', $salida) }}" method="POST" class="mt-4">
        @csrf
        @method('PUT')

        <!--<div class="mb-3">
            <label for="ID_Producto" class="form-label">Producto</label>
            <select class="form-select" id="ID_Producto" name="ID_Producto" required>
                @foreach($productos as $producto)
                    <option value="{{ $producto->ID_Producto }}" {{ $producto->ID_Producto == $salida->ID_Producto ? 'selected' : '' }}>
                        {{ $producto->Descripcion_PDT }}
                    </option>
                @endforeach
            </select>
        </div>-->

        <div class="mb-3">
            <label for="ID_Producto" class="form-label">Producto</label>
            <select name="ID_Producto" id="ID_Producto" class="form-select" required>
                <option value="">Selecciona un producto</option>
                @foreach ($productos as $producto)
                <option value="{{ $producto->ID_Producto }}">{{ $producto->Descripcion_PDT }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="Cantidad_SAL" class="form-label">Cantidad</label>
            <input type="number" name="Cantidad_SAL" id="Cantidad_SAL" class="form-control" min="1" required>
        </div>
        <div class="mb-3">
            <label for="Fecha_Salida_SAL" class="form-label">Fecha de Salida</label>
            <input type="date" name="Fecha_Salida_SAL" id="Fecha_Salida_SAL" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="Motivo_ENUM" class="form-label">Motivo</label>
            <select name="Motivo_ENUM" id="Motivo_ENUM" class="form-select" required>
                <option value="Venta">Venta</option>
                <option value="Donación">Donación</option>
                <option value="Desperdicio">Desperdicio</option>
                <option value="Otro">Otro</option>
            </select>
        </div>
        <button type="submit" class="btn btn-success">Registrar</button>
    </form>
@endsection