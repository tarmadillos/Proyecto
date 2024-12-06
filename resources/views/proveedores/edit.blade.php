@extends('layouts.main')

@section('content')
<div class="container mt-4">
    <h1 class="text-center">Editar Proveedor</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('proveedores.update', $proveedor->ID_Proveedor) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="Nombre_PVD" class="form-label">Nombre del Proveedor</label>
            <input type="text" class="form-control" id="Nombre_PVD" name="Nombre_PVD" value="{{ $proveedor->Nombre_PVD }}" required>
        </div>

        <div class="mb-3">
            <label for="Contacto_PVD" class="form-label">Contacto</label>
            <input type="text" class="form-control" id="Contacto_PVD" name="Contacto_PVD" value="{{ $proveedor->Contacto_PVD }}">
        </div>

        <div class="mb-3">
            <label for="Telefono_PVD" class="form-label">Teléfono</label>
            <input type="text" class="form-control" id="Telefono_PVD" name="Telefono_PVD" value="{{ $proveedor->Telefono_PVD }}">
        </div>

        <div class="mb-3">
            <label for="Email_PVD" class="form-label">Correo Electrónico</label>
            <input type="email" class="form-control" id="Email_PVD" name="Email_PVD" value="{{ $proveedor->Email_PVD }}">
        </div>

        <button type="submit" class="btn btn-primary">Guardar Cambios</button>
        <a href="{{ route('proveedores.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection