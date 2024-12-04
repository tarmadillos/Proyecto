<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reporte de Baja Rotación</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
    </style>
</head>
<body>
    <h1>Reporte de Productos de Baja Rotación</h1>
    <table>
        <thead>
            <tr>
                <th>Descripción del Producto</th>
                <th>Total de Salidas</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($productosBajaRotacion as $producto)
                <tr>
                    <td>{{ $producto->Descripcion_PDT }}</td>
                    <td>{{ $producto->total_salidas }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
