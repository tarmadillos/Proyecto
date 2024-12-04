@extends('layouts.main')

@section('content')
<div class="container">
    <h1 class="text-center">Reporte de Ventas</h1>
    <form action="{{ route('reportes.generar-ventas') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="fecha_inicio" class="form-label">Fecha de Inicio</label>
            <input type="date" name="fecha_inicio" id="fecha_inicio" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="fecha_fin" class="form-label">Fecha Final</label>
            <input type="date" name="fecha_fin" id="fecha_fin" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Generar Reporte</button>
    </form>
</div>
@endsection
