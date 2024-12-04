@extends('layouts.main')

@section('content')
<div class="container">
    <h1 class="text-center">Reporte de Inventario</h1>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Producto</th>
                <th>Stock Mínimo</th>
                <th>Precio Compra</th>
                <th>Precio Venta</th>
                <th>Imagen</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($inventario as $item)
                <tr>
                    <td>{{ $item->Descripcion_PDT }}</td>
                    <td>{{ $item->Stock_Minimo_PDT }}</td>
                    <td>{{ $item->Precio_Compra_PDT }}</td>
                    <td>{{ $item->Precio_Venta_PDT }}</td>
                    <td>
                        @if ($item->Imagen_PDT)
                            <img src="{{ asset('storage/' . $item->Imagen_PDT) }}" alt="Imagen Producto" style="width: 50px;">
                        @else
                            No disponible
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
