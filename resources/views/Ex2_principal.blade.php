<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <title>Grilla responsive con Bootstrap</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    </head>
    
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="bg-light p-3">
                        Contenido principal
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="bg-light p-3">
                        Barra lateral
                    </div>
                 </div>
            </div>
        </div>

        <div class="container mt-5">
            <button class="btn btn-primary">Botón primario</button>
            <button class="btn btn-secondary">Botón secundario</button>
            <form class="mt-4">
                <div class="form-group">
                    <label for="exampleInputEmail1">Correo electrónico</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
            </form>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"></script>
    </body>
</html>
