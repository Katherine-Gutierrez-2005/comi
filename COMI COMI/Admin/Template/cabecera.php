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
    <header>
    <nav class="menu-fixed">
    <ul class="menu">
                <li>
                <a href="Index.php">Inicio</a>
                </li>
                <li>
                <a href="Platos.php">Menú</a>
                </li>
                <li>
                <a href="Nosotros.php">Nosotros</a>
                </li>
                <li>
                <a href="Atencion.php">Atención al cliente</a>
                </li>
                <li>
                <a href="Mostrarcarrito.php">Ver carrito 
                    (<?php echo (empty($_SESSION['Carrito']))?0:count($_SESSION['Carrito']); ?>)
                </a>
                </li>
                <li>
                <a href="Administrador/Index.php">Administrador</a>
                </li>
            </ul>
        </nav>
        <section class="textos-header">
            <h1>Menú</h1>
            <h2>COMI COMI</h2>
        </section>
    </header>
    <?php if($mensaje!=""){ ?>
    <div class="alert alert-success">
        <?php echo ($mensaje);?>
        <a href="Mostrarcarrito.php" class="badge badge-success">Ver carrito</a>
    </div>
    <?php } ?>
<main>
    <div class="container">
    <br/>
        <div class="row">