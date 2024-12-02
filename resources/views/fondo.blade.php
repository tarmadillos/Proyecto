<!DOCTYPE html>
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
    <!--<div class="content">
        <h1>Bienvenido</h1>
        <p>Texto con fondo semitransparente</p>
    </div> -->
</body>
</html>