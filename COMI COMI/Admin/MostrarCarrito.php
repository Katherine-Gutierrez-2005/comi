<?php include("Administrador/Confi/bd.php"); ?>
<?php include("Carrito.php"); ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comicomi</title>
    <link rel="icon" type="image/png" sizes="16x16"  href="Img/favicons/favicon-16x16.png">
    <link rel="stylesheet" href="./CSS/Menuestilo.css"/>
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">
</head>
<body>
    <header class="Carrito">
    <nav class="menu-fixed">
        <ul class="menu">
            <li>
                <a href="Index.php">Inicio</a>
            </li>
            <li>
                <a href="Platos.php">Menú</a>
            </li>
        </ul>
    </nav>
        <section class="textos-headerC">
            <h1>Carrito de compras</h1>
        </section>
    </header>
<main>
    <div class="container">
        </br>
        <h3>Lista de carrito</h3>
        <?php if(!empty($_SESSION['Carrito'])){?>
        <table class="table table-light table-bordered">
            <tbody>
                <tr>
                    <th width="40%">Plato</th>
                    <th width="15%" class="text-center">cantidad</th>
                    <th width="20%" class="text-center">Precio</th>
                    <th width="20%" class="text-center">Total</th>
                    <th width="5%">--</th>
                </tr>
                <?php $total=0; ?>
                <?php foreach ($_SESSION['Carrito'] as $indice => $producto) {?>
                <tr>
                    <td width="40%"><?php echo $producto['nombre'] ?></td>
                    <td width="15%" class="text-center"><?php echo $producto['cantidad'] ?></td>
                    <td width="20%" class="text-center">$<?php echo $producto['precio'] ?></td>
                    <td width="20%" class="text-center">$<?php echo number_format($producto['precio']*$producto['cantidad'],3);?></td>
                    <td width="5%">
                        <form action="" method="post">
                        <input type="hidden" name="id" value="<?php echo $producto['id']; ?>">
                        <button class="btn btn-danger" type="submit" name="btnAccion" value="Eliminar">Eliminar</button>
                        </form>
                    </td>
                </tr>
                <?php $total=$total+($producto['precio']*$producto['cantidad']); ?>
                <?php } ?>
                <tr>
                    <td colspan="3" align="right"><h3>Total</h3></td>
                    <td align="right"><h3>$<?php echo number_format($total,3);?></h3></td>
                    <td></td>
                </tr>
                <tr>
                    <td colspan="5">
                        <form action="pagar.php" method="post">
                            <div class="alert alert-success">
                                <div class="form-group">
                                <label for="my-input">Correo de contacto:</label>
                                <input type="email" name="email" id="email" class="form-control" placeholder="Por favor ingresa tú correo" required>
                                </div>
                                <small id="emailHelp" class="form-text text-muted">La informacion respecto al envio de los platos se enviara a este correo</small>
                            </div>
                            <button class="btn btn-primary btn-lg btn-block" type="submit" value="proceder" name="btnAccion">Proceder a pagar</button>
                        </form>
                    </td>
                </tr>
            </tbody>
        </table>
        <?php }else{ ?>
            <div class="alert alert-success">
                No hay platos en el carrito...
            </div>
        <?php } ?>
    </div>
    </br>
    </main>
    <footer>
        <div class="contenedor-footer">
            <div class="content-foo">
                <h4>Número</h4>
                <p>3114886060</p>
            </div>
            <div class="content-foo">
                <h4>Correo</h4>
                <p>comicomicomicomi10@gmail.com</p>
            </div><div class="content-foo">
                <h4>Facebook</h4>
                <p>@comi_comi_2022</p>
            </div>
        </div>
         <h2 class="Titulo-final">&copy;ComiComi | Nosotros </h2>
    </footer>
</body>
</html>