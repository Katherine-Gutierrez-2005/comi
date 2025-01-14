<!--<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <nav class="navbar navbar-expand navbar-light bg-light">
        <div class="nav navbar-nav">
            <a class="nav-item nav-link active" href="#">Administrador <span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link" href="#">Inicio</a>
            <a class="nav-item nav-link" href="#">Platos</a>
            <a class="nav-item nav-link" href="#">Cerrar secion</a>
            <a class="nav-item nav-link" href="#">IVer Menú</a>
        </div>
    </nav>
    <div class="container">
        <div class="row">-->
<?php include('template/Cabecera.php'); ?>

            <div class="col-md-12">
            <div class="jumbotron">
                <h1 class="display-3">Bienvenid@ <?php echo $nombreUsuario; ?> </h1>
                <p class="lead">Administra tu menú</p>
                <hr class="my-2">
                <p class="lead">
                    <a class="btn btn-primary btn-lg" href="seccion/productos.php" role="button">Administrar platos</a>
                </p>
            </div>
            </div>

<?php include('template/Pie.php'); ?>
<!--    </div>
    </div>
  </body>
</html>-->