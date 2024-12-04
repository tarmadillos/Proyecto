<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menú Principal</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
</head>
<body>

    <!-- Contenido principal -->
    <div class="container mt-4">
        <h1 class="text-center">Bienvenido al Sistema de Gestión</h1>
        <p class="text-center">Selecciona una opción del menú para continuar.</p>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary sticky-top"> 
              <!-- "container-fluid" lo justifica a la izquierda -->
        <div class="container justify-content-center">
            <!-- <a class="navbar-brand" href="#">Autenticarse</a> -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" href="/proyecto">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('proveedores.index') }}">Proveedores</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('productos.index') }}">Productos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('categorias.index') }}">Categorias</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('entradas.index') }}">Entrada Material</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('salidas.index') }}">Salida Material</a>
                    </li>
                    <!--<ul class="navbar-nav">
                         Otros enlaces 
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('reportes.baja-rotacion') }}">Baja Rotación</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('reportes.ventas') }}">Reporte de Ventas</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('reportes.inventario') }}">Inventario Actual</a>
                        </li>
                    </ul>-->
                    
<li class="nav-item">
    <a class="nav-link {{ request()->routeIs('reportes.baja-rotacion') ? 'active' : '' }}" href="{{ route('reportes.baja-rotacion') }}">Baja Rotación</a>
</li>
<li class="nav-item">
    <a class="nav-link {{ request()->routeIs('reportes.ventas') ? 'active' : '' }}" href="{{ route('reportes.ventas') }}">Reporte de Ventas</a>
</li>
<li class="nav-item">
    <a class="nav-link {{ request()->routeIs('reportes.inventario') ? 'active' : '' }}" href="{{ route('reportes.inventario') }}">Inventario Actual</a>
</li>
                

                  <!--    <li class="nav-item">
                        <a class="nav-link" href="/inventario">Control de Inventario</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/reportes">Reportes / Informes</a>
                    </li> -->
                    <li class="nav-item">
                        <a class="nav-link text-danger" href="/salir">Salir</a> 
                    </li>
                </ul>
            </div>
        </div>
    </nav>

</body>
</html>