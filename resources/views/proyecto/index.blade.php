<!--<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fondo con Transparencia</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            /* Imagen de fondo */
            background-image: url('https://images.ctfassets.net/63bmaubptoky/1OKrqRKhHseguTn87NLjW0/a1ce5f856d0cf407c3ad7b431a1546d2/software-de-gestion-de-inventarios-ES-Capterra-Header.png?w=1000');
            background-size: cover; /* Escala la imagen para cubrir todo el fondo */
            background-repeat: no-repeat; /* Evita que se repita */
            background-position: center; /* Centra la imagen */
            height: 100vh; /* Altura del viewport */
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .overlay {
            background-color: rgba(255, 255, 255, 0.5); /* Capa blanca semitransparente */
            width: 100%;
            height: 100%;
            position: absolute;
            top: 0;
            left: 0;
            z-index: 1;
        }

        .content {
            position: relative;
            z-index: 2;
            text-align: center;
            color: #333;
        }
    </style>
</head>
<body>
    
   <div class="overlay"></div>
    <div class="content">
        <h1>Bienvenido</h1>
        <p>Texto con fondo semitransparente</p>
    </div> 
</body>
</html>-->

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fondo con Overlay</title>
    <style>
        /* Contenedor principal */
        .container {
            position: relative;
            height: 100vh; /* Ocupa toda la altura de la ventana */
            width: 100%;
        }

        /* Imagen de fondo */
        .background-image {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: url('{{ asset('imagenes/fondo.png') }}');
            background-size: cover;
            background-position: center;
            z-index: 1; /* Establece que la imagen esté detrás del overlay */
        }

        /* Overlay semitransparente */
        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5); /* Semitransparente */
            z-index: 2; /* Asegúrate de que el overlay esté por encima de la imagen */
        }

        /* Contenido */
        .content {
            position: relative;
            z-index: 3; /* Asegúrate de que el contenido esté encima del overlay */
            color: white;
            text-align: center;
            padding-top: 20%;
        }
    </style>
</head>
<body>

    <!-- Contenedor principal -->
    <div class="container">
        <!-- Imagen de fondo -->
        <div class="background-image"></div>

        <!-- Overlay semitransparente -->
        <div class="overlay"></div>

        <!-- Contenido principal 
        <div class="content">
            <h1>Texto sobre la imagen con fondo transparente</h1>
            <p>Este contenido no se ve afectado por la transparencia del fondo.</p>
        </div>-->
    </div>

</body>
</html>
