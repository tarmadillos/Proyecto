@extends('layouts.main')

@section('title', 'Agregar Producto')

@section('content')
    <h1>Agregar Producto</h1>
    <form action="{{ route('productos.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="Descripcion_PDT" class="form-label">Descripción</label>
            <input type="text" name="Descripcion_PDT" class="form-control" id="Descripcion_PDT" required>
        </div>
        <div class="mb-3">
            <label for="ID_Categoria" class="form-label">Categoría</label>
            <input type="number" name="ID_Categoria" class="form-control" id="ID_Categoria" required>
        </div>
        <div class="mb-3">
            <label for="ID_Proveedor" class="form-label">Proveedor</label>
            <input type="number" name="ID_Proveedor" class="form-control" id="ID_Proveedor" required>
        </div>
        <div class="mb-3">
            <label for="Precio_Compra_PDT" class="form-label">Precio de Compra</label>
            <input type="number" step="0.01" name="Precio_Compra_PDT" class="form-control" id="Precio_Compra_PDT" required>
        </div>
        <div class="mb-3">
            <label for="Precio_Venta_PDT" class="form-label">Precio de Venta</label>
            <input type="number" step="0.01" name="Precio_Venta_PDT" class="form-control" id="Precio_Venta_PDT" required>
        </div>
        <div class="mb-3">
            <label for="Stock_Minimo_PDT" class="form-label">Stock Mínimo</label>
            <input type="number" name="Stock_Minimo_PDT" class="form-control" id="Stock_Minimo_PDT" required>
        </div>
        <div class="mb-3">
            <label for="Imagen_PDT" class="form-label">Imagen</label>
            <input type="file" name="Imagen_PDT" class="form-control" id="Imagen_PDT">
        </div>
        <button type="submit" class="btn btn-success">Guardar Producto</button>
    </form>
@endsection
