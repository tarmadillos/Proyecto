@extends('layouts.main')

@section('title', 'Agregar Categoria')

@section('content')
    <h1>Agregar Categoria</h1>
    <form action="{{ route('categorias.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="Nombre_CAT" class="form-label">Categoría</label>
            <input type="text" name="Nombre_CAT" class="form-control" id="Nombre_CAT" required>
        </div>
        <div class="mb-3">
            <label for="Descripcion_CAT" class="form-label">Descripción</label>
            <input type="text" name="Descripcion_CAT" class="form-control" id="Descripcion_CAT" required>
        </div>
        <button type="submit" class="btn btn-success">Guardar Categoria</button>
    </form>
@endsection
