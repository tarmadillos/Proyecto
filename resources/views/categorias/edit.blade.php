@extends('layouts.main')

@section('content')
<div class="container mt-4">
    <h1 class="text-center">Editar Categoría</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('categorias.update', $categoria->ID_Categoria) }}" method="POST">
        @csrf
        @method('PUT')
        
        <div class="mb-3">
            <label for="Nombre_CAT" class="form-label">Nombre de la Categoría</label>
            <input type="text" class="form-control" id="Nombre_CAT" name="Nombre_CAT" value="{{ $categoria->Nombre_CAT }}" required>
        </div>

        <div class="mb-3">
            <label for="Descripcion_CAT" class="form-label">Descripción</label>
            <textarea class="form-control" id="Descripcion_CAT" name="Descripcion_CAT" rows="3">{{ $categoria->Descripcion_CAT }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Guardar Cambios</button>
        <a href="{{ route('categorias.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection