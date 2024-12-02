@extends('layouts.main')

@section('title', 'Agregar Producto')

@section('content')
    <h1>Agregar Producto</h1>
    <form action="{{ route('proveedores.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="Nombre_PVD" class="form-label">Nombre</label>
            <input type="text" name="Descripcion_PDT" class="form-control" id="Nombre_PVD" required>
        </div>
        <div class="mb-3">
            <label for="Contacto_PVD" class="form-label">Contacto</label>
            <input type="text" name="Contacto_PVD" class="form-control" id="Contacto_PVD" required>
        </div>
        <div class="mb-3">
            <label for="Telefono_PVD" class="form-label">Telefono</label>
            <input type="text" name="Telefono_PVD" class="form-control" id="Telefono_PVD" required>
        </div>
        <div class="mb-3">
            <label for="Email_PVD" class="form-label">Email</label>
            <input type="text" step="0.01" name="Email_PVD" class="form-control" id="Email_PVD" required>
        </div>
       
        <button type="submit" class="btn btn-success">Guardar Producto</button>
    </form>
@endsection
