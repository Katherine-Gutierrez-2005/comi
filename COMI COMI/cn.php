<?php
 $conexion = mysqli_connect("localhost", "root", "", "comi");
 mysli_set_charset($conexion, "utf8");
 if($connecta->connect_error){
    die("Error al conectar la base de datos de la pagina".$connecta->connect_error);
 } 
 ?>
 