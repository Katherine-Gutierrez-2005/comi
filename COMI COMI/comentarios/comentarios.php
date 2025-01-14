<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Comentarios</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/comentarios.css">
</head>
<body>
    <img src="img/25.jpg" alt="" class="background">
    <div class="container">
        <div class="row comentarios justify-content-center">
            <div class="col-6">
           <form action="" class="form_comentarios d-flex justify-content-center">

        <form method="post" action="enviarcomentario-php.php"
        
                    </div>
                </div>
 <div class="capa-data">
 <div class="container-data">
    <div class="foto-input">
        <div class="perfil-foto">  
        <img src="img/descarga.jpg" id="photoSelect"alt="">  
    </div>
        <input type="file" id="loadPhoto">
        <input type="text" placeholder="Nombres" name="Nombres">
    
    </div>
    <textarea class="mensaje"name="Mensaje" id="" cols="30" placeholder="Escriba su mensaje"rows="10"></textarea>
    <button class="btn-comment"> <a href="Google.com">Enviar comentario</a> </button > 

    </div>
        
        </div>
        </div>
    </div>
    </div>
    <?php

    $conexion=mysqli_connect("localhost", "root", "comentario");
    $resultado= mysqli_query($conexion, 'SELECT * FROM comentarios');
    while($mensaje= mysqli_fetch_obtect($resultado)){
 
        ?>
        <<b><?php echo($Mensaje-> $Nombres); ?></b> (<?php echo($Mensaje->fecha); ?>) dijo:
        <br/>
        <?php echo ($Mensaje->Mensaje);?>
        <br/>

        <?php
    }
    ?>

        </form>
    
    
</body>
</html>